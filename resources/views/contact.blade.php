@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-11">
        <div class="card shadow-lg border-0 overflow-hidden">
            <div class="row no-gutters">
                <div class="col-md-5 bg-dark text-white p-5">
                    <h2 class="font-weight-bold mb-4">Kontak Kami</h2>
                    <p class="text-light opacity-75 mb-5">Kami siap membantu kamu. Silakan hubungi kami melalui saluran berikut.</p>
                    
                    <ul class="list-unstyled">
                        <li class="mb-4">
                            <div class="small text-primary text-uppercase font-weight-bold">Alamat</div>
                            <div class="h5">Demak, Jawa Tengah, Indonesia</div>
                        </li>
                        <li class="mb-4">
                            <div class="small text-primary text-uppercase font-weight-bold">WhatsApp</div>
                            <div class="h5">+62 857 5582 7684</div>
                        </li>
                        <li class="mb-4">
                            <div class="small text-primary text-uppercase font-weight-bold">Email</div>
                            <div class="h5 text-break">adibpratama157@gmail.com</div>
                        </li>
                        <li>
                            <div class="small text-primary text-uppercase font-weight-bold">Instagram</div>
                            <div class="h5">@addzzap_</div>
                        </li>
                    </ul>
                </div>
                
                <div class="col-md-7">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d110.5566144!3d-6.8906368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70be3164436579%3A0x3027a76352920c0!2sDemak%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
                        width="100%" height="100%" style="border:0; min-height: 450px;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection