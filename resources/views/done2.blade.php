<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            در صورت بروز هر گونه مشکل یا سوال می توانید با شماره زیر تماس بگیرید.
            <br>
            <br>
            <span class="mt-2" style="color: green;">09131008888 </span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <div class="col-lg-4" style="display: block;
  margin-left: auto;
  margin-right: auto;
  ">



                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title" style="font-weight : bold;">پرسشنامه رضایتمندی بیمار از کیقیت مراقبت پرستاری</h5>
                                    <h6 class="card-subtitle mt-3 text-muted">لطفا بعد از دیدن آموزش های مربوطه فرم زیر
                                        را پر کنید.</h6>
                                    <form method="get"
                                        action="{{ route('dashboard.submitSecondForm' , ['id' => $user->id]) }}">
                                        @csrf
                                        @foreach($questions as $q)
                                            <div class="mt-3">
                                                <x-label for="family" :value="__($q->name)" />
                                                <div class="mt-4 form-check">
                                                    <input class="form-check-input" type="radio" value="4"
                                                        name="Q{{ $q->id }}ans" required>
                                                    <label class="form-check-label" for="Q{{ $q->id }}ans4">
                                                    عالی
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="3"
                                                        name="Q{{ $q->id }}ans" required>
                                                    <label class="form-check-label" for="Q{{ $q->id }}ans3">
                                                    خیلی خوب
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="2"
                                                        name="Q{{ $q->id }}ans" required>
                                                    <label class="form-check-label" for="Q{{ $q->id }}ans2">
                                                    خوب
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="1"
                                                        name="Q{{ $q->id }}ans" required>
                                                    <label class="form-check-label" for="Q{{ $q->id }}ans1">
                                                    منصفانه
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="0"
                                                        name="Q{{ $q->id }}ans" required>
                                                    <label class="form-check-label" for="Q{{ $q->id }}ans1">
                                                    ضعیف
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach

                                        <button type="submit"
                                            class="mt-4 btn btn-outline-success btn-lg btn-block w-full">ثبت</button>
                                    </form>
                                </div>
                            </div>
                       

                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
            integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script type="text/javascript">

        </script>
    </x-slot>
</x-app-layout>
