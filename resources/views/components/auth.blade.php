@guest()
    <div class="modal fade" role="dialog" id="loginModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="d-flex justify-content-center"><img src="{{ Storage::url('public/logo.png') }}" style="width: 100px;margin: 10px 0;"></div>
                <div class="modal-body" style="background-color: #ffffff;">
                    <form class="login-form">
                        <div class="form-group group-email">
                            <input class="form-control email" type="email" placeholder="Correo" required>
                        </div>
                        <div class="form-group group-password">
                            <input class="form-control password" type="password" placeholder="Contraseña" required>
                        </div>
                        <div class="d-flex">
                            <button
                                class="btn btn-primary border rounded-0"
                                type="button"
                                style="width: 45%;background-color: #12365b;margin-right: 5%;"
                                data-toggle="modal" data-target="#registerModal"
                            >@lang('data.register')</button>
                            <button
                                class="btn btn-primary border rounded-0"
                                type="submit"
                                style="width: 45%;background-color: #12365b;margin-left: 5%;"
                            >@lang('data.login')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" id="registerModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="d-flex justify-content-center"><img src="{{ Storage::url('public/logo.png') }}" style="width: 100px;margin: 10px 0;"></div>
                <div class="modal-body" style="background-color: #ffffff;">
                    <form class="register-form">
                        <div class="form-group group-name">
                            <input class="form-control name" type="text" placeholder="Nombre" required="">
                        </div>
                        <div class="form-group group-lastname">
                            <input class="form-control lastname" type="text" placeholder="Apellido" required="">
                        </div>
                        <div class="form-group group-email">
                            <input class="form-control email" type="email" placeholder="Correo" required="">
                        </div>
                        <div class="form-group group-password">
                            <input class="form-control password" type="password" placeholder="Contraseña" required="">
                        </div>
                        <div class="form-group group-confirm-password">
                            <input class="form-control confirm-password" type="password" placeholder="Confirmar Contraseña" required="">
                        </div>
                        <button class="btn btn-primary border rounded-0" type="submit" style="width: 100%;background-color: #12365b;">Registrate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.login-form').submit((event)=>{
            $('.error').remove();
            event.preventDefault();
            axios.post('/login',{
                email:$('.login-form .email').val(),
                password:$('.login-form .password').val()
            }).then(result=>{
                location.reload();
            }).catch(error=>{
                let errors = error.response.data.errors;
                if(typeof(errors.email)!=="undefined"){
                    $('<span class="error">'+errors.email[0]+'</span>').appendTo('.login-form .group-email')
                }
                if(typeof(errors.password)!=="undefined"){
                    $('<span class="error">'+errors.password[0]+'</span>').appendTo('.login-form .group-password')
                }
                toastr.error('Datos invalidos','Verifique los datos ingresados');
            });
        });
        $('.register-form').submit((event)=>{
            event.preventDefault();
            console.log('hello')
            $('.error').remove();
            axios.post('/register',{
                name:$('.register-form .name').val(),
                lastname:$('.register-form .lastname').val(),
                email:$('.register-form .email').val(),
                password:$('.register-form .password').val(),
                password_confirmation:$('.register-form .confirm-password').val()
            }).then(result=>{
                location.reload();
            }).catch(error=>{
                let errors = error.response.data.errors;
                if(typeof(errors.name)!=="undefined"){
                    $('<span class="error">'+errors.name[0]+'</span>').appendTo('.register-form .group-name')
                }
                if(typeof(errors.lastname)!=="undefined"){
                    $('<span class="error">'+errors.lastname[0]+'</span>').appendTo('.register-form .group-lastname')
                }
                if(typeof(errors.email)!=="undefined"){
                    $('<span class="error">'+errors.email[0]+'</span>').appendTo('.register-form .group-email')
                }
                if(typeof(errors.password)!=="undefined"){
                    $('<span class="error">'+errors.password[0]+'</span>').appendTo('.register-form .group-password')
                }
                if(typeof(errors.password_confirmation)!=="undefined"){
                    $('<span class="error">'+errors.password_confirmation[0]+'</span>').appendTo('.register-form .group-confirm-password')
                }
                toastr.error('Datos invalidos','Verifique los datos ingresados');
            });
        });
    </script>
    @endguest