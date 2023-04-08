@extends('layouts.base')

@section('title')
    Создать новость
@endsection

@section('content')
    <div class="container text-center">
        <p class="news_title">Создание новости от администратора</p>

    </div>
    <div class="container d-flex flex-row-reverse">
        <a href="{{ route('admin.news') }}">Назад к новостям админа</a>
    </div>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8">

                <form action="{{ route('admin.news.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 ms-3 me-3">
                        <label class="">Название новости:</label>
                        <div class="d-flex align-items-center justify-content-center">

                            <input class="form-control " type="text" name="title" id="" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 ms-3 me-3">
                        <label class="">Содержание новости:</label>
                        <div class="mb-3">
                            <p>
                                <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
                            </p>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center justify-content-center">
                            <button type="submit" class="btn" style="border: 1px black solid">Создать</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
{{-- @push('js')
    <script src=""></script>
@endpush --}}
@push('js')
    <script>
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }

            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        this._initRequest();
                        this._initListeners(resolve, reject, file);
                        this._sendRequest(file);
                    }));
            }

            abort() {
                if (this.xhr) {
                    this.xhr.abort();
                }
            }

            _initRequest() {
                const xhr = this.xhr = new XMLHttpRequest();

                xhr.open('POST', "{{ route('admin.news.upload', ['_token' => csrf_token()]) }}", true);
                xhr.responseType = 'json';
            }

            _initListeners(resolve, reject, file) {
                const xhr = this.xhr;
                const loader = this.loader;
                const genericErrorText = `Couldn't upload file: ${ file.name }.`;

                xhr.addEventListener('error', () => reject(genericErrorText));
                xhr.addEventListener('abort', () => reject());
                xhr.addEventListener('load', () => {
                    const response = xhr.response;

                    if (!response || response.error) {
                        return reject(response && response.error ? response.error.message : genericErrorText);
                    }

                    resolve(response);
                });

                if (xhr.upload) {
                    xhr.upload.addEventListener('progress', evt => {
                        if (evt.lengthComputable) {
                            loader.uploadTotal = evt.total;
                            loader.uploaded = evt.loaded;
                        }
                    });
                }
            }

            _sendRequest(file) {
                const data = new FormData();
                data.append('upload', file);
                this.xhr.send(data);
            }
        }

        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        }

        ClassicEditor
            .create(document.querySelector('#editor'), {
                extraPlugins: [MyCustomUploadAdapterPlugin],
            })
            .catch(error => {
                console.log(error);
            });
    </script>
@endpush
