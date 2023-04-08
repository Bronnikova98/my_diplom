<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CKEditor 5 – Classic editor</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
</head>

<body>
    <h1>Classic editor</h1>
    <form action="{{ url('store') }}" method="post">
        @csrf
        <p>
            <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
        </p>

        <input type="submit" name="submit" value="Submit">
    </form>
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

                xhr.open('POST', "{{ route('upload', ['_token' => csrf_token()]) }}", true);
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
</body>

</html>




{{-- <script>
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

            xhr.open('POST', "{{ route('upload', ['_token' => csrf_token()]) }}", true);
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
</script> --}}
