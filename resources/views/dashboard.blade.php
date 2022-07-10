<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-family: Vazirmatn, sans-serif;">
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
                        @if($difference >= 1)
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">آیا عمل آندوسکوپی انجام
                                                دادید؟</h5>
                                            <button type="button" class="close closewin" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            در صورتی که عمل آندوسکوپی را انجام داده باشید می بایست فرم اضطراب و فرم
                                            رضایتمندی را پر کنید
                                            <br>
                                            در صورت کلیک بر روی دکمه بله به صفحه دیگری انتقال پیدا خواهید کرد و در صورتی
                                            که قصد دارید آموزش های آندوسکوپی را مطالعه کنید بر روی دکمه بستن و یا مطالعه
                                            آموزش ها کلیک نمایید.
                                        </div>
                                        <div class="modal-footer">
                                            <form method="get"
                                                action="{{ route('dashboard.doneAndo') }}">
                                                <button type="submit" class="btn" data-dism iss="modal">بله</button>
                                                <button type="button" class="btn closewin">مطالعه آموزش ها</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                        @if($user->seenFirst == 0)

                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">پرسشنامه اولیه اضطراب</h5>
                                        <h6 class="card-subtitle mt-3 text-muted">لطفا قبل از دیدن آموزش های مربوطه فرم
                                            زیر
                                            را پر کنید.</h6>
                                        <form method="get"
                                            action="{{ route('dashboard.submit' , ['id' => $user->id]) }}">
                                            @csrf
                                            @foreach($questions as $q)
                                                <div class="mt-4">
                                                    <x-label for="family" :value="__($q->id.'- '.$q->name)" />
                                                    <div class="mt-4 form-check">
                                                        <input class="form-check-input" type="radio" value="4"
                                                            name="Q{{ $q->id }}ans" required>
                                                        <label class="form-check-label" for="Q{{ $q->id }}ans4">
                                                            خیلی زیاد
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="3"
                                                            name="Q{{ $q->id }}ans" required>
                                                        <label class="form-check-label" for="Q{{ $q->id }}ans3">
                                                            زیاد
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="2"
                                                            name="Q{{ $q->id }}ans" required>
                                                        <label class="form-check-label" for="Q{{ $q->id }}ans2">
                                                            کم
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="1"
                                                            name="Q{{ $q->id }}ans" required>
                                                        <label class="form-check-label" for="Q{{ $q->id }}ans1">
                                                            خیلی کم
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <hr>
                                                </div>
                                            @endforeach

                                            <button type="submit"
                                                class="mt-4 btn btn-outline-success btn-lg btn-block w-full">ثبت</button>
                                        </form>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- note change = to ! -->
                    @if($user->seenFirst != 0)

                        <div class="mt-4 row">
                            <div class="col-12">
                                <div class="jumbotron">
                                    <h1 class="display-4">آندوسکوپی</h1>
                                    <p class="mt-3 lead">آندوسکوپی وسیله به گوارش دستگاه درون دیدن از است عبارت آندوسکوپ
                                        مخصوص. باید گفت که برای دیدن هر قسمت از بدن انسان دستگاه مخصوصی ساخته اند برای
                                        دیدن
                                        مری، معده و اثنی عشر دستگاهی به صورت لوله پلاستیکی انعطاف پذیر ساخته شده است که
                                        در
                                        انتهای آن عدسی کوچکی به قطر حدود 2 میلیمتر وجود دارد و تصاویر به وسیله فیبرهای
                                        نوری
                                        باریک و ظریفی به عدسی چشمی منتقل می شود و پزشک از بیرون می تواند درون دستگاه
                                        گوارشی
                                        را به راحتی ببیند.</p>
                                    <hr class="my-4">

                                    <p class="lead">
                                        <img src="{{ URL::asset('/img/andoimg.png') }}"
                                            alt="profile Pic">
                                    </p>
                                    <p class="mt-4">انجام آندوسکوپی گرچه برای بیمار قدری ناخوشایند است، ولی با پاشیدن
                                        اسپری
                                        بی حس کننده در حلق بیمار، معمولا ً بدون بیهوشی و درد انجام می شود. پزشک هنگام
                                        آندوسکوپی علاوه بر دیدن و تشخیص بیماری و گرفتن نمونه برای آزمایش از مخاط گوارشی،
                                        در
                                        صورت نیاز یک سری از کارهای درمانی مانند بند آوردن خونریزی و... را میتواند انجام
                                        دهد.
                                        آندوسکوپی اشعه ایکس ندارد و پس از هربار مصرف، شست وشو و ضد عفونی میشود لذا
                                        احتمال
                                        انتقال بیماری وجود ندارد و برای زنان باردار نیز قابل انجام می باشد.
                                    </p>
                                    <div class="row mt-4">
                                        <video controls>
                                            <source src="{{ URL::asset('/vid/ando.mp4') }}"
                                                type="video/mp4">
                                            <source src="{{ URL::asset('/vid/ando.mp4') }}"
                                                type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="mt-4 row">
                            <div class="col-12">
                                <div class="jumbotron">
                                    <h1 class="display-4">مراحل انجام آندوسکوپی</h1>
                                    <p class="mt-3 lead">در واقع برای انجام آندوسکوپی به سمت چپ خود دراز میکشید و پس از
                                        زدن
                                        اسپری بی حس کننده به حلق شما، یک قطعه کوچک محافظ بین دندان های شما قرار میگیرد
                                        این
                                        کار باعث می شود دندانهای شما آسیب نبیند و همچنین دندانهای شما به دستگاه آندوسکوپ
                                        آسیب نرساند. بعد از آمادگی کامل شما، پزشک سر آندوسکوپ را روی زبان شما قرار می
                                        دهد و
                                        آن را به سمت گلو می برد و از شما می خواهد که آن را قورت بدهید، با این کار مری
                                        باز می
                                        شود و آندوسکوپ به سمت پایین و معده می رود که طی این مدت یک پرستار مرتب در کنار
                                        شما
                                        خواهد بود.
                                        وقتی سر آندوسکوپ وارد معده شد، معده را باد میکند تا مشاهده داخل معده بهتر انجام
                                        شود.
                                        ممکن است به شما حالت تهوع دست دهد که این امری طبیعی است گفتنی است که در برخی
                                        مواقع
                                        نیز پزشک ممکن است اقدام به نمونه برداری از مخاط گوارش کند که این کار کاملا ً
                                        بدون
                                        درد می باشد.
                                    </p>
                                    <hr class="my-4">

                                    <p class="lead">
                                        <img src="{{ URL::asset('/img/andoimg2.jpg') }}"
                                            alt="profile Pic">
                                    </p>

                                </div>
                            </div>

                        </div>



                        <div class="mt-4 row">
                            <div class="col-12">
                                <div class="jumbotron">
                                    <h1 class="display-4">آموزش قبل از آندوسکوپی</h1>
                                    <p class="mt-3 lead">
                                        اگر قرار است برای شما آندوسکوپی انجام شود حتما ً به این موارد توجه داشته باشید
                                    </p>
                                    <hr class="my-4">
                                    <p class="mt-4">

                                        1. روز انجام آندوسکوپی ناشتا بوده و شب قبل شام سبک میل کنید. (درصورتی که به شما
                                        برای ظهر وقت آندوسکوپی داده شد ساعت 6 صبح یک لیوان آب و عسل یا چای شیرین میل
                                        شود)
                                        <br>
                                        <br>
                                        2.در صورت مصرف وارفارین، آسپیرین، پلاویکس به پزشک خود اطلاع دهید و حداقل 5 روز
                                        قبل از انجام آندوسکوپی بنا به تصمیم پزشک آنها را قطع کنید.
                                        <br>
                                        <br>
                                        3. در صورت داشتن سن بالای 50 سال، داشتن دیابت یا بیماری قلبی و ریوی حتما ً
                                        مشاوره پزشک قلب، داخلی، نوار قلب و آزمایش های مربوطه را همراه داشته باشید.
                                        <br>
                                        <br>
                                        4. طلاجات، وسایل زینتی و فلزی و دندان مصنوعی قبل از انجام آندوسکوپی خارج گردد.
                                        <br>
                                        <br>
                                        5. در صورتی که به بیماری های هپاتیت و ایدز مبتلا هستید، حتما قبل از انجام
                                        آندوسکوپی به پزشک خود اطلاع دهید تا راهکارهای مربوطه را برای عدم انتقال بیماری
                                        انجام دهد.
                                        <br>
                                        <br>
                                        6. هر زمان که برای آندوسکوپی مراجعه می کنید، کلیه مدارک پزشکی خود را همراه داشته
                                        باشید.
                                        <br>
                                        <br>
                                        7. روز انجام آندوسکوپی حتما ً یک نفر همراه با خود داشته باشید. در برخی اوقات طی
                                        انجام آندوسکوپی نمونه هایی از بافت های داخلی گرفته می شود که این نمونه ها از سوی
                                        بیمار یا بخش مربوطه به پاتولوژی فرستاده می شود تا زیر میکروسکوپ مورد بررسی قرار
                                        گیرد. حتما ً پیگیر نتیجه نمونه برداری های خود باشید.
                                        علاوه بر این گاهی لازم است بیمار ساعاتی پس از انجام آندوسکوپی در محل آندوسکوپی
                                        تحت نظر باشد این موارد را در برنامه های خود لحاظ کنید.
                                        همچنین پس از انجام آندوسکوپی اگر به ندرت دچار خونریزی، درد بیش از حد و تهوع،
                                        شدید

                                    </p>


                                </div>
                            </div>

                        </div>


                        <div class="mt-4 row">
                            <div class="col-12">
                                <div class="jumbotron">
                                    <h1 class="display-4">آموزش بعد از آندوسکوپی</h1>
                                    <p class="mt-3 lead">
                                        اگر قرار است برای شما آندوسکوپی انجام شود حتما ً به این موارد توجه داشته باشید
                                    </p>
                                    <hr class="my-4">
                                    <p class="mt-4">


                                        1. بعد از انجام آندوسکوپی، برای بیمارانی که از داروی بیهوشی استفاده نکرده اند،
                                        پس از اینکه قادر به قورت دادن آب دهان به طور کامل بودید، می توانید مصرف مایعات
                                        گرم را شروع کرده و سپس در ادامه، رژیم غذایی معمولی را استفاده کنید.
                                        <br>
                                        <br>

                                        2. در صورت استفاده از داروهای بیهوشی، بیمار تا هوشیاری کامل در ریکاوری مراقبت می
                                        شود، حضور همراه جهت ترخیص الزامی است.

                                        <br>
                                        <br>

                                        3. شروع رژیم غذایی معمولا ً یک ساعت بعد از ترخیص بیمار از ریکاوری و با بازگشت
                                        رفلاکسقورت دادن آب دهان به طور کامل می باشد.

                                        <br>
                                        <br>

                                        4. درد در ناحیه گلو و ته حلق بعد از آندوسکوپی طبیعی می باشد و با مصرف فراوان
                                        مایعات گرم برطرف می شود.

                                        <br>
                                        <br>

                                        5. نفخ و درد شکم تا مقداری که برای بیمار قابل تحمل باشد، مشکلی ندارد ولی استفراغ
                                        و دل درد شدید، خونریزی(استفراغ خونی)، بیقراری، نبض تند، تاری دید از مواردی می
                                        باشد که باید سریعا ً پیگیری و به اولین مرکز درمانی یا اورژانس مراجعه کرد.

                                        <br>
                                        <br>

                                        6. دریافت جواب آندوسکوپی معمولا ً به طور متوسط یک ساعت به طول می انجامد.

                                        <br>
                                        <br>

                                        7. جهت ویزیت، بعد از دریافت جواب آندوسکوپی به صورت حضوری به پزشک مراجعه فرمائید.

                                        <br>
                                        <br>
                                        8. در صورت داشتن نمونه پاتولوژی، جهت تحویل به واحد آزمایشگاه، می بایست تا دریافت
                                        جواب آندوسکوپی به همراه برگه پاتولوژی صبر نموده و سپس به واحد آزمایشگاه واقع در
                                        طبقه اول ساختمان شماره دو (ضلع غربی) مراجعه فرمائید.
                                        <br>
                                        <br>
                                        9. در صورت مصرف دارو از قبل، بعد از انجام آندوسکوپی می توانید طبق روال قبل
                                        داروهای خود را مصرف نمائید.

                                    </p>


                                </div>
                            </div>

                        </div>


                    @endif
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
            $(window).on('load', function () {
                $('#myModal').modal('show');

                $('.closewin').click(function () {
                    $('#myModal').modal('hide');
                });
            });

        </script>
    </x-slot>
</x-app-layout>
