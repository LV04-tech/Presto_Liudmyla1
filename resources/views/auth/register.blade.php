<x-layout>
    <div class="container pt-5">
        
            <div class="col-12 text-center text-white">
                <h1 class="display-4 pt-5 height-regist">
                     {{__("ui.signUp")}}
                </h1>
            </div>
       
        <div class="row justify-content-center align-items-center ">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('register')}}" class="height-custom shadow rounded p-5 ">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label"> {{__("ui.name")}}</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label"> {{__("ui.mailAddress")}}</label>
                        <input type="email" class="form-control" id="registerEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"> {{__("ui.password")}}</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label"> {{__("ui.repeatPassword")}}</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                   <div class="d-flex justify-content-center">
                     <button type="submit" class="log-btn"> {{__("ui.signUp")}}</button>
                   </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>