@extends('admin.layouts.master')

@section('content')

<div class="content">
    <div class="pb-5">
        <div class="row g-4">


            <div class="col-xl-6">
                <div class="contact-form-box1">
                    <div class="top-title">
                        <h2>Fabrikadan Sipariş Ver</h2>
                    </div>
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Form Örneği</title>
                        <style>
                            .error {
                                color: red;
                            }

                            .success {
                                display: none;
                                color: white;
                                background-color: green;
                                padding: 10px;
                                border-radius: 5px;
                                margin-top: 10px;
                            }
                        </style>
                    </head>

                    <body>

                        <form id="myForm" name="contact_form" class="default-form1" action="/admin/siparises"
                            method="get">
                            <div class="input-box">
                                <input type="text" name="form_name" value="" placeholder="Şube İsmi" required="">
                                <div class="icon">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="input-box">
                                <input type="email" name="form_email" value="" placeholder="E-mail" required="">
                                <div class="icon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="input-box">
                                <input type="text" name="form_phone" value="" placeholder="Telefon" required="">
                                <div class="icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="input-box">
                                <label for="mySelect">Su Çeşidi:</label>
                                <select id="mySelect" name="mySelect">
                                    <option value="">Seçiniz</option>
                                    <option value="option1">0.5 Litre</option>
                                    <option value="option2">1 Litre</option>
                                    <option value="option3">2 Litre </option>
                                    <option value="option3">5 Litre </option>
                                    <option value="option3">10 Litre </option>
                                    <option value="option3">20 Litre </option>

                                </select>
                                <span id="error" class="error"></span>
                            </div>
                            <br>

                            <div class="input-box">
                                <input type="text" name="form_phone" value="" placeholder="Sipariş Adeti(Koli)"
                                    required="">
                                <div class="icon">
                                    <i class="fa-solid fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="input-box">
                                <input type="text" name="form_address" value="" placeholder="Adres">
                                <div class="icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="button-box">
                                <div class="left">
                                    <div class="checked-box1">
                                        <input type="checkbox" name="skipper1" id="skipper" checked>
                                        <label for="skipper"><span></span>Sipariş Sözleşmesini Okudum Kabul
                                            Ediyorum</label>
                                    </div>
                                </div>
                                <div class="right">
                                    <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                        <span class="round"></span>
                                        <span class="txt">Continue</span>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <span id="success" class="success">Başarıyla gönderildi.</span>

                        <script>
                            document.getElementById("myForm").addEventListener("submit", function (event) {
                                var selectValue = document.getElementById("mySelect").value;
                                var errorSpan = document.getElementById("error");
                                var successSpan = document.getElementById("success");

                                if (selectValue === "") {
                                    errorSpan.innerText = "Lütfen bir seçim yapın.";
                                    successSpan.style.display = "none"; // Başarı mesajını gizle
                                    event.preventDefault(); // Formun gönderilmesini engelle
                                } else {
                                    errorSpan.innerText = ""; // Hata mesajını temizle
                                    successSpan.style.display = "block"; // Başarı mesajını göster
                                }
                            });
                        </script>

                    </body>

                    </html>



                </div>
            </div>








        </div>
    </div>
</div>




@endsection

@push('scripts')
@endpush