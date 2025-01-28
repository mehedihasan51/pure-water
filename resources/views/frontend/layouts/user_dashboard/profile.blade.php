@extends('frontend.user_dashboard')
@section('title','profile')

@section('content')

<section class="profile--edit--wrapper">
    <div class="container">
        <div class="profile--wrapper">
            <div class="profile--left">
                <div class="profile--overview">
                    <div class="profile--profile--pic">
                        <img src="{{asset('frontend/pure-water/assets/images/littelProfilepic.png')}}" alt="not found">
                    </div>
                    <div class="profile--userName--main">
                        <h4>Azunyan U. Wu</h4>
                        <h5>elementary221b@gmail.com</h5>
                    </div>
                </div>
            </div>
            <div class="profile--right">
                <div class="partner--details--item profileEdit">
                    <div class="partner--details--content">
                        <h4 class="partner--details--text">Bronze Partner</h4>
                        <ul>
                            <li>0-5 units sold per month on average per half-year</li>
                            <li>Receive a 15% discount</li>
                        </ul>
                    </div>
                    <div class="partner--details--benchmark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="40" viewBox="0 0 42 40" fill="none">
                            <path d="M40.8168 20.2084C40.8168 22.664 37.8307 24.5081 36.9453 26.6433C36.0274 28.8568 36.8003 32.264 35.1322 33.9322C33.4641 35.6004 30.0568 34.8274 27.8433 35.7453C25.708 36.6307 23.8639 39.6169 21.4084 39.6169C18.9529 39.6169 17.1088 36.6307 14.9735 35.7453C12.76 34.8274 9.3528 35.6003 7.6846 33.9322C6.01641 32.2642 6.78941 28.8568 5.8715 26.6433C4.98615 24.5081 2 22.664 2 20.2084C2 17.7529 4.98615 15.9088 5.8715 13.7736C6.78941 11.5601 6.01652 8.15285 7.6846 6.48465C9.35269 4.81646 12.76 5.58946 14.9735 4.67155C17.1088 3.7862 18.9529 0.800049 21.4084 0.800049C23.8639 0.800049 25.708 3.7862 27.8433 4.67155C30.0568 5.58946 33.464 4.81657 35.1322 6.48465C36.8004 8.15274 36.0274 11.5601 36.9453 13.7736C37.8307 15.9088 40.8168 17.7529 40.8168 20.2084Z" fill="url(#paint0_linear_22132_4340)"/>
                            <path d="M21.4067 34.1307C29.0958 34.1307 35.329 27.8975 35.329 20.2084C35.329 12.5194 29.0958 6.28613 21.4067 6.28613C13.7176 6.28613 7.48438 12.5194 7.48438 20.2084C7.48438 27.8975 13.7176 34.1307 21.4067 34.1307Z" fill="url(#paint1_linear_22132_4340)"/>
                            <path d="M21.4067 32.9589C28.4486 32.9589 34.1572 27.2503 34.1572 20.2084C34.1572 13.1665 28.4486 7.45789 21.4067 7.45789C14.3648 7.45789 8.65625 13.1665 8.65625 20.2084C8.65625 27.2503 14.3648 32.9589 21.4067 32.9589Z" fill="url(#paint2_radial_22132_4340)"/>
                            <path d="M21.851 25.2309L25.3108 27.0498C25.4679 27.1324 25.6449 27.1694 25.8219 27.1566C25.9988 27.1438 26.1687 27.0818 26.3122 26.9775C26.4558 26.8732 26.5673 26.7308 26.6341 26.5665C26.7009 26.4021 26.7205 26.2223 26.6905 26.0474L26.0297 22.1949C26.0036 22.0429 26.0149 21.887 26.0626 21.7404C26.1102 21.5938 26.1928 21.461 26.3032 21.3534L29.1021 18.6249C29.2292 18.5011 29.3191 18.3442 29.3616 18.1719C29.4041 17.9997 29.3976 17.8189 29.3428 17.6502C29.288 17.4815 29.187 17.3314 29.0514 17.217C28.9157 17.1027 28.7508 17.0286 28.5752 17.0031L24.707 16.441C24.5545 16.4188 24.4096 16.3599 24.2849 16.2693C24.1602 16.1787 24.0593 16.0591 23.9911 15.9209L22.2611 12.4157C22.1826 12.2567 22.0612 12.1227 21.9105 12.029C21.7598 11.9354 21.5859 11.8857 21.4085 11.8857C21.2311 11.8857 21.0572 11.9354 20.9066 12.029C20.7559 12.1227 20.6344 12.2567 20.5559 12.4157L18.8259 15.9209C18.7577 16.0591 18.6569 16.1787 18.5322 16.2693C18.4075 16.3599 18.2627 16.4188 18.1101 16.441L14.242 17.0031C14.0664 17.0285 13.9014 17.1027 13.7658 17.217C13.6301 17.3314 13.5291 17.4814 13.4743 17.6502C13.4194 17.8189 13.4129 17.9996 13.4554 18.1719C13.498 18.3442 13.5879 18.5011 13.7149 18.6249L16.514 21.3533C16.6244 21.4609 16.707 21.5937 16.7546 21.7403C16.8022 21.8869 16.8135 22.0429 16.7875 22.1949L16.1267 26.0474C16.0967 26.2223 16.1162 26.4021 16.183 26.5665C16.2499 26.7309 16.3614 26.8733 16.5049 26.9776C16.6485 27.0819 16.8184 27.1439 16.9954 27.1567C17.1723 27.1694 17.3494 27.1324 17.5064 27.0498L20.9661 25.2309C21.1026 25.1592 21.2544 25.1217 21.4086 25.1217C21.5627 25.1217 21.7146 25.1592 21.851 25.2309Z" fill="url(#paint3_linear_22132_4340)"/>
                            <path d="M23.1911 7.58301C17.3651 14.1881 14.0372 19.9158 15.4574 21.336C17.0104 22.8889 23.7129 18.7652 31.0818 11.9059C29.0655 9.55247 26.2599 8.01542 23.1911 7.58301ZM12.2266 29.0577C13.5161 30.3962 15.0824 31.437 16.816 32.1072C20.5236 27.926 22.6527 24.2844 21.7557 23.3876C20.8013 22.4331 16.7396 24.9038 12.2266 29.0577Z" fill="white" fill-opacity="0.0627451"/>
                            <defs>
                              <linearGradient id="paint0_linear_22132_4340" x1="33.8325" y1="7.78437" x2="3.53358" y2="38.0833" gradientUnits="userSpaceOnUse">
                                <stop offset="0.002" stop-color="#EAECEF"/>
                                <stop offset="1" stop-color="#CAD0D7"/>
                              </linearGradient>
                              <linearGradient id="paint1_linear_22132_4340" x1="47.6994" y1="-8.33353" x2="12.5666" y2="29.8047" gradientUnits="userSpaceOnUse">
                                <stop offset="0.002" stop-color="#EAECEF"/>
                                <stop offset="1" stop-color="#CAD0D7"/>
                              </linearGradient>
                              <radialGradient id="paint2_radial_22132_4340" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-45.9865 -55.5964) scale(29.4226 15.4731)">
                                <stop stop-color="#E4E8EB"/>
                                <stop offset="1" stop-color="#A9B0BB"/>
                              </radialGradient>
                              <linearGradient id="paint3_linear_22132_4340" x1="35.6708" y1="-6.35136" x2="14.5908" y2="32.0522" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#A9B0BB"/>
                                <stop offset="1" stop-color="#636C77"/>
                              </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>


        <div class="main--profile--area--wrapper">
            <div class="d-flex align-items-start nr--customFormobile">
                <div class="profile--navss--left">
                    <div class="nav customss flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <button class="nav-link custom active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">General</button>

                      <button class="nav-link custom" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Edit Profile</button>

                      <button class="nav-link custom" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Password</button>

                      <a href="about.html" class="nav-link custom">Company</a>
                    </div>
                    
                    <div class="log--out--btn">
                        <a class="log--out--btn--profile--edit" href="#">Log Out</a>
                    </div>
                </div>
                <div class="profile--navss--right">
                    <form action="#">
                        <div class="tab-content custom" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

                            <div class="profile--inner--wrapper--main">
                                <div class="profile--editor--inputs--wrapper">
                                    <div class="profile--editor--full--name">
                                        <label for="userName">User Name</label>
                                        <input placeholder="saklainsarowor" type="text" id="userName">
                                    </div>
                                    <div class="profile--editor--full--name">
                                        <label for="fullemail">Email</label>
                                        <input placeholder="Enter Your Email" type="email" id="fullemail">
                                    </div>
                                </div>

                                <div class="profile--editor--inputs--saveBtn">
                                    <button>Save</button>
                                </div>

                            </div>

                          </div>
    
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"      tabindex="0">

                            <div class="profile--inner--wrapper--main">
                                <div class="profile--adjuster">
                                    <div class="profile--inner--profile--pic">
                                        <img id="profilePic" src="./assets/images/profilePic--main.png" alt="not found">
                                    </div>

                                    <div class="profile--adjuste-profile--editor">
                                        <div class="profile--adjuste-profile--svg" id="uploadIcon">
                                            <div class="profile--adjuste-profile--svg--svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 22 21" fill="none">
                                                    <path d="M13.2871 19.4672H20.9634" stroke="white" stroke-width="1.92188" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2615 1.84643C13.0825 0.865266 14.5583 0.721393 15.5598 1.52567C15.6152 1.5693 17.3943 2.95142 17.3943 2.95142C18.4946 3.61654 18.8364 5.0305 18.1563 6.10955C18.1202 6.16733 8.06166 18.7491 8.06166 18.7491C7.72702 19.1666 7.21903 19.4131 6.67614 19.419L2.82413 19.4673L1.95623 15.7938C1.83465 15.2773 1.95623 14.7348 2.29087 14.3174L12.2615 1.84643Z" stroke="white" stroke-width="1.92188" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.3984 4.18143L16.1692 8.61318" stroke="white" stroke-width="1.92188" stroke-linecap="round" stroke-linejoin="round"/>
                                                  </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="file" id="fileInput" style="display: none;">
                                </div>
                                <div class="profile--editor--inputs--wrapper">
                                    <div class="profile--editor--full--name">
                                        <label for="fullName">Full Name</label>
                                        <input placeholder="saklainsarowor" type="text" id="fullName">
                                    </div>
                                    <div class="profile--editor--full--name">
                                        <label for="fullnumber">Phone Number</label>
                                        <input placeholder="(208) 555-0112" type="number" id="fullnumber">
                                    </div>
                                    <div class="profile--editor--full--name">
                                        <label for="fulladdress">Address</label>
                                        <input placeholder="2118 Thornridge Cir. Syracuse, Connecticut 35624" type="text" id="fulladdress">
                                    </div>
                                </div>

                                <div class="profile--editor--inputs--saveBtn">
                                    <button>Save</button>
                                </div>
                            </div>

                          </div>
    
                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">

                            <div class="profile--inner--wrapper--main">
                                <div class="profile--editor--inputs--wrapper">
                                    <div class="profile--editor--full--name">
                                        <label for="userPassword">Old Password</label>
                                        <input placeholder="Enter Your Password" type="password" id="userPassword">
                                    </div>
                                    <div class="profile--editor--full--name">
                                        <label for="NewPassword">New Password</label>
                                        <input placeholder="Enter Your Email" type="password" id="NewPassword">
                                    </div>
                                </div>

                                <div class="profile--editor--inputs--saveBtn">
                                    <button>Save</button>
                                </div>

                            </div>

                          </div>
    
                        </div>

                        
                    </form>
                </div>

              </div>
        </div>

    </div>
</section>

@endsection