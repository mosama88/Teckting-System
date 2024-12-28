<form class="mb-3" wire.submit.prevent="submit">
    <div class="mb-3" style="direction: rtl;">
        <label for="username" class="form-label">أسم المستخدم</label>
        <input type="text" class="form-control" id="username" wire:model="username" placeholder="أدخل أسم المستخدم"
            autofocus />
        @error('username')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between" style="direction: rtl;">
            <label class="form-label" for="password">كلمة المرور</label>
        </div>
        <div class="input-group input-group-merge">
            <input style="direction: rtl;" type="password" id="password" class="form-control" wire:model="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        @error('password')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3" dir="rtl">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" wire:model="remember" id="remember-me" />
            <label class="form-check-label" for="remember-me"> تذكرنى </label>
        </div>
    </div>

    <div class="mb-3">
        <button class="btn btn-primary mx-auto d-grid w-50 d-flex align-items-center justify-content-center"
            type="submit">
            <div wire:loading.remove>
                <span>تسجيل الدخول</span>
            </div>
            <div class="spinner-border text-secondary ms-2" wire:loading wire:target="submit" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </button>
    </div>
</form>
