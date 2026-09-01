<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class=" log">
                  {{__("ui.login")}}
                </h1>
            </div>
       </div>
        <div class="row justify-content-center align-items-center form-log">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('login') }}" class="shadow rounded mb-5 p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label form"> {{__("ui.mailAddress")}}</label>
                        <input type="email" class="form-control" id="loginEmail" name="email">
                    </div>
                     <div class="mb-3">
                        <label for="password" class="form-label form"> {{__("ui.password")}}</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="log-btn"> {{__("ui.login")}}</button>
                    </div>
                </form>
         </div>
    </div>
</x-layout>