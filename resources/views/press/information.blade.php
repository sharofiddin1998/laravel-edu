<x-layouts.main>
    @slot('title')
    {!! $category->name !!}
    @endslot
    <div class="main-page-w">
        <div class="my-container">
            <div class="main-in">
                <h1 class="txt-48 line-left al" data-sr-id="5" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: opacity 2s cubic-bezier(0.5, 0, 0, 1) 0s, transform 2s cubic-bezier(0.5, 0, 0, 1) 0s;">
                    {!! $category->name !!}             </h1>
                <div class="main">
                    <div class="main-left">
                        <div class="cards-rahbaryat">
                            @foreach ($category->leaders as $leader)
                                <div class="card-b ab" data-sr-id="0" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: opacity 1.5s cubic-bezier(0.5, 0, 0, 1) 0.3s, transform 1.5s cubic-bezier(0.5, 0, 0, 1) 0.3s;">
                                    <img src="{{ asset('storage/'.$leader->photo) }}" alt="">
                                    <div class="sec">
                                        <p class="txt-20">
                                            {{$leader->position}}                                    </p>
                                        <p class="txt-32">
                                            {{$leader->fullname}}                                     </p>
                                        <div class="main-c">
                                            <div class="blog-in">
                                                <div class="top">
                                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.96246 8.548C5.30948 13.4392 9.48597 17.328 14.6778 19.4351L14.6942 19.4417L15.6972 19.8696C16.9745 20.4142 18.4757 20.0274 19.2946 18.9427L20.968 16.7261C21.0702 16.5907 21.0438 16.4025 20.908 16.2975L17.9867 14.0418C17.8414 13.9297 17.6278 13.9559 17.5167 14.0993L16.3798 15.5677C16.1036 15.9244 15.6049 16.0483 15.1824 15.8653C11.3002 14.1837 8.18052 11.198 6.42361 7.48244C6.23239 7.07805 6.36187 6.60079 6.73447 6.33651L8.26873 5.24831C8.41866 5.14197 8.44596 4.93759 8.32877 4.79859L5.97161 2.0022C5.86206 1.87222 5.66542 1.84698 5.52396 1.94472L3.19535 3.55361C2.0545 4.34185 1.65274 5.79072 2.23507 7.01665L2.96169 8.54636C2.96195 8.54692 2.96221 8.54746 2.96246 8.548ZM13.9005 21.1673C8.25924 18.8754 3.72182 14.6489 1.17162 9.33292L1.17009 9.32978L0.441945 7.79685C-0.528605 5.75364 0.140997 3.33884 2.04243 2.02511L4.37103 0.416223C5.3613 -0.267983 6.73778 -0.0912667 7.50465 0.818507L9.8618 3.61492C10.682 4.58788 10.4909 6.01859 9.44146 6.76291L8.5623 7.38648C10.0475 10.1443 12.401 12.397 15.2826 13.8183L15.9342 12.9768C16.7119 11.9725 18.2067 11.7897 19.2234 12.5747L22.1448 14.8302C23.0956 15.5644 23.2801 16.8824 22.5646 17.8302L20.8911 20.0468C19.5263 21.8546 17.0243 22.4994 14.8956 21.5916L13.9005 21.1673Z" fill="#169FD8"></path>
                                                    </svg>
                                                    <span class="txt-14">Telefon</span>
                                                </div>
                                                <p class="bottom txt-18">{{$leader->phone}}</p>
                                            </div>
                                            <div class="blog-in">
                                                <div class="top">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.25145 0.4375C3.56211 0.4375 3.81395 0.689342 3.81395 1V2.25072C5.93473 2.06185 8.06818 2.06185 10.189 2.25072V1C10.189 0.689342 10.4408 0.4375 10.7515 0.4375C11.0621 0.4375 11.314 0.689342 11.314 1V2.36233C12.4337 2.52066 13.3184 3.40635 13.4681 4.53613L13.5331 5.02584C13.8061 7.08558 13.7825 9.1738 13.463 11.2269C13.3048 12.2439 12.4786 13.0251 11.4542 13.1261L10.5595 13.2144C8.1932 13.4477 5.8097 13.4477 3.4434 13.2144L2.54864 13.1261C1.52434 13.0251 0.698091 12.2439 0.539834 11.2269C0.220364 9.1738 0.196784 7.08558 0.469814 5.02584L0.534726 4.53613C0.684486 3.40634 1.56915 2.52063 2.68895 2.36232V1C2.68895 0.689342 2.94079 0.4375 3.25145 0.4375ZM3.58532 3.4021C5.85725 3.17806 8.14565 3.17806 10.4176 3.4021L11.0966 3.46907C11.7467 3.53318 12.2671 4.0364 12.3529 4.68395L12.4178 5.17367C12.4405 5.34475 12.461 5.51605 12.4794 5.6875H1.5235C1.54186 5.51605 1.56238 5.34476 1.58506 5.17368L1.64997 4.68395C1.73581 4.0364 2.25617 3.53318 2.90623 3.46907L3.58532 3.4021ZM1.43407 6.8125C1.36044 8.22858 1.43299 9.6499 1.65145 11.0539C1.73083 11.564 2.14527 11.9558 2.65905 12.0065L3.55381 12.0947C5.84668 12.3209 8.15623 12.3209 10.4491 12.0947L11.3438 12.0065C11.8576 11.9558 12.272 11.564 12.3514 11.0539C12.5699 9.6499 12.6424 8.22858 12.5688 6.8125H1.43407Z" fill="#169FD8"></path>
                                                    </svg>

                                                    <span class="txt-14">Qabul kunlari</span>
                                                </div>
                                                <p class="bottom txt-18">{{$leader->day}}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bot-b">
                                        <div class="acardions">
                                                                                                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                                </div>
                    </div>
                    <div class="main-right">

                        <div class="main-right-sidebar">
                            <div class="main-content ab2" data-sr-id="2" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: opacity 1.5s cubic-bezier(0.5, 0, 0, 1) 0.6s, transform 1.5s cubic-bezier(0.5, 0, 0, 1) 0.6s;">
                            @foreach($categories as $category)
                                <a href="{{ route('press.information', ['category'=> $category->id]) }}" class="card-c  ">
                                        <h1 class="txt-16 ">{!! $category->name !!}</h1>
                                </a>
                            @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
