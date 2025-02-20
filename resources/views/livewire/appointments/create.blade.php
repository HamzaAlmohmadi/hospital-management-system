<div>

    {{-- @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif --}}

    <form wire:submit.prevent="store">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <input type="text" name="username" wire:model="name" placeholder="اسمك">
                @if ($validated)
                    <!-- تحقق من إذا تم الإرسال -->
                    <div class="alert alert-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                @endif
                <span class="icon fa fa-user"></span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <input type="email" name="email" wire:model="email" placeholder="البريد الالكتروني" required="">
                @if ($validated)
                    <!-- تحقق من إذا تم الإرسال -->
                    <div class="alert alert-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                @endif
                <span class="icon fa fa-envelope"></span>
            </div>

            {{-- <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="exampleFormControlSelect1">الدكتور</label>
                <select name="doctor" wire:model="doctor" class="form-select" id="exampleFormControlSelect1" required>
                    @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>
                @if ($validated)
                    <!-- تحقق من إذا تم الإرسال -->
                    <div class="alert alert-danger">
                        @error('doctor')
                            {{ $message }}
                        @enderror
                    </div>
                @endif
            </div> --}}

            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="doctorSelect">الدكتور</label>
                <select name="doctor" wire:model="doctor" class="form-select" id="doctorSelect" >
                    <option value="">اختر من القائمة</option>
                    @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>

                @if ($validated)
                    <!-- تحقق من إذا تم الإرسال -->
                    <div class="alert alert-danger">
                        @error('doctor')
                            {{ $message }}
                        @enderror
                    </div>
                @endif
            </div>



            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                <label for="exampleFormControlSelect1">القسم</label>
                <select class="form-select" name="section" wire:model.change="section" id="exampleFormControlSelect1">
                    <option value="">اختر من القائمة</option>
                    @foreach ($sections as $section)
                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                    @endforeach

                </select>
                @if ($validated)
                    <!-- تحقق من إذا تم الإرسال -->
                    <div class="alert alert-danger">
                        @error('section')
                            {{ $message }}
                        @enderror
                    </div>
                @endif
            </div>

            <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                <input type="tel" name="phone" wire:model="phone" placeholder="رقم الهاتف" required="">
                @if ($validated)
                    <!-- تحقق من إذا تم الإرسال -->
                    <div class="alert alert-danger">
                        @error('phone')
                            {{ $message }}
                        @enderror
                    </div>
                @endif
                <span class="icon fas fa-phone"></span>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <textarea name="notes" wire:model="notes" placeholder="ملاحظات"></textarea>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                    <span class="txt">تاكيد</span></button>
            </div>
        </div>
    </form>

</div>
