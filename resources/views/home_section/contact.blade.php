<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Kontak</h2>
            <p>
                Lokasi Padang Eye Center
            </p>
        </div>

        <div>
            <iframe style="border: 0; width: 100%; height: 270px"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2746796191063!2d100.354469!3d-0.9458494000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b94a2b803371%3A0x440316e36b045d6b!2sRSKM%20Padang%20Eye%20Center!5e0!3m2!1sid!2sid!4v1715160763575!5m2!1sid!2sid"
                frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>{{ $hospitalData->address }}</p>
                    </div>

                    <a
                        href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to={{ $hospitalData->social_accounts[0]->url }}">
                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{ $hospitalData->social_accounts[0]->url }}</p>
                        </div>
                    </a>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>{{ $hospitalData->social_accounts[1]->url }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">
                <div class="php-email-form">
                    <div class="row gy-2 gx-md-3">
                        <input type="hidden" id="idHospital" value="{{ $hospitalData->id }}">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama"
                                required />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Alamat Email" required />
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="phone_number" class="form-control" name="phone_number" id="phoneNumber"
                                placeholder="Nomor Hp/WA" required />
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul"
                                required />
                        </div>
                        <div class="form-group col-12">
                            <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required id="message"></textarea>
                        </div>
                        <div class="my-3 col-12">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your message has been sent. Thank you!
                            </div>
                        </div>
                        <div class="text-center col-12">
                            <button type="submit" onclick="submitComplaint()">Kirim Pesan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    async function submitComplaint() {
        try {
            const idHospital = $('#idHospital').val()
            const clientName = $('#name').val()
            const clientEmail = $('#email').val()
            const clientPhoneNumber = $('#phoneNumber').val()
            const complaintSubject = $('#subject').val()
            const complaintMessage = $('#message').val()
            let data = {
                "id_hospital": idHospital,
                "name": clientName,
                "email": clientEmail,
                "phone_number": clientPhoneNumber,
                "subject": complaintSubject,
                "message": complaintMessage
            }
            const response = await fetch(`{{ url('api/submit-complaint') }}`, {
                method: "POST",
                headers: {
                    Accept: 'application/json',
                    'Content-Type': 'application/json',
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                },
                body: JSON.stringify(data)
            })

            if (!response.ok) {
                const errorData = await response.json();
                const errorMessage = errorData.message;
                throw new Error(errorMessage);
            }

            const responseData = await response.json()
            console.log(responseData)

        } catch (error) {
            console.error(error);
            alert("Request failed: " + error.message);
        }

    }
</script>
