@extends('templates.main')

@section('principal')

<div class="container-fluid m-0">
    <div class="row">
        <div class="col-md-12 pt-5 pt-md-1 pb-5 overflow-hidden bg-dark">
            <div class="container-fluid p-md-5 d-flex align-items-center h-100">
                <div class="row justify-content-md-center">
                    <div class="col-md-8 text-center">
                        <img class="rounded mb-1" style=" width: 9em; height: 9em;" src="logo1.png" alt="logo">
                        <h3 class="medium text-light mt-2">MAR  BADIA</h3>
                        <h1 class="mb-5 pt-md-2 pt-sm-4 text-light">Developer Web &amp; multiplatform App</h1>
                        <h3 class="medium" style="color: #3490dc"><u>WHO I AM?</u></h3>
                        <p class="text-light">
                            I am a full stack developer in Barcelona, Spain.
                            Apart from development, I have other passions, such as sports, technology, animals and reading.
                        </p>
                        <br/>
                        {{-- <video width="550" controls="control">
                            <source src="storage/video.mp4" type="video/mp40">
                                <p>Error</p>
                        </video> --}}
                        <br/>
                        <h3 class="medium" style="color: #3490dc"><u>STUDIES</u></h3>
{{--                                       -----DAM------                                            --}}
                        <div class="card mb-2 mr-2" style="background-color: #48525b">
                            <div class="card-header text-light">
                                    2017-present
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-light font-weight-bold">Higher Technician in Multi-platform Applications Development</h4>
                                <p class="card-text text-light">Broadly speaking, the main job of the Senior Technician in Multi-platform application development is to develop, implement, document and maintain cross-platform computer applications, using specific technologies and development environments, ensuring access to data securely and meeting the criteria of use and quality required by the established standards.</p>
                            </div>
                        </div>

{{--                                       -----DAW------                                            --}}
                         <div class="card m-2 mr-2 mb-5" style="background-color: #48525b">
                            <div class="card-header text-light">
                                  2019-present
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-light font-weight-bold">Higher Technician in Web Applications Development</h4>
                                <p class="card-text text-light">Broadly speaking, the main job of the Senior Technician in cross-platform application development is to develop, implement, document and maintain cross-platform computer applications, using specific technologies and development environments, ensuring access to data securely and meeting the criteria of use and quality required by the established standards.</p>
                            </div>
                        </div>


{{--                                       -----DATOS CONTACTO------                                      --}}
                        <div class="mt-5  text-left">
                            <h3 class="text-light">Contacto</h3>
                            <a href="https://www.instagram.com/badiaa5/"><img src="storage/logos/instagram.png" alt="instagram-icon" style=" width: 2em; height: 2em;"></a>
                            <a href="https://www.linkedin.com/in/mar-badia-g%C3%B3mez-a418a4184/"><img src="storage/logos/linkedin (1).png" alt="linkedin-icon" style=" width: 2em; height: 2em;"></a>
                            <a href="https://github.com/maaaaar"><img src="storage/logos/github.png" alt="github.png" style=" width: 2em; height: 2em;"></a>
                            <a href="https://twitter.com/badia_mar"><img src="storage/logos/twitter.png" alt="contact-icon" style=" width: 2em; height: 2em;"></a>
                        </div>
                    </div>
{{--                                       -----FRONTEND------                                            --}}

                    <div class="col-10 col-md-3 pt-md-5 m-3">
                        <h3 class="medium" style="color: #3490dc"><u>SKILLS</u></h3>
                        <h5 class="mt-md-4 mb-2 small text-uppercase text-light">Frontend</h5>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar" role="progressbar" style="width: 75%">
                                <span class="stacked-label">HTML</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 80%">
                                <span class="stacked-label text-light">CSS/SASS</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 35%">
                                <span class="stacked-label text-light">JavaScript</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 40%">
                                <span class="stacked-label text-light">Angular</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 75%">
                                <span class="stacked-label text-light">Bootstrap</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 55%">
                                <span class="stacked-label text-light">Ionic</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 40%">
                                <span class="stacked-label text-light">Vue</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 60%">
                                <span class="stacked-label text-light">Android</span>
                            </div>
                        </div>

{{--                                       -----BACKEND------                                             --}}
                        <h5 class="mt-md-4 mb-2 small text-uppercase text-light">Backend</h5>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 70%">
                                <span class="stacked-label">PHP</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 70%">
                                <span class="stacked-label">Laravel</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 60%">
                                <span class="stacked-label">NodeJs</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar " role="progressbar" style="width: 50%">
                                <span class="stacked-label">Java</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 75%">
                                <span class="stacked-label">C#</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 70%">
                                <span class="stacked-label">C++</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar  " role="progressbar" style="width: 60%">
                                <span class="stacked-label">API</span>
                            </div>
                        </div>

{{--                                       -----DATABASE------                                            --}}
                        <h5 class="mt-md-4 mb-2 small text-uppercase text-light">Database</h5>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar " role="progressbar" style="width: 80%">
                                <span class="stacked-label">SQL Server</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar " role="progressbar" style="width: 75%">
                                <span class="stacked-label">MySQL</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar " role="progressbar" style="width: 35%">
                                <span class="stacked-label">Oracle SQL Developer</span>
                            </div>
                        </div>
                        <div class="progress mb-2 mt-2 bg-light">
                            <div class="progress-bar " role="progressbar" style="width: 85%">
                                <span class="stacked-label">MySQL Workbench</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>
    @endsection
