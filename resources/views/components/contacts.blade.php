<section id="contacts" class="d-flex align-items-center py-5 bg-second">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right" data-aos-duration="1500">
                <div style="width: 90%;">
                    <div class="text-center text-lg-start py-4 pt-lg-0">
                        <p>CONTATTACI</p>
                        <h2 class="py-2">Inviaci la tua richiesta</h2>
                        <p>Siamo disponibili per rispondere a tutte le tue domande o richieste di assistenza. Siamo qui per aiutarti.</p>
                    </div>
                    <div>
                        <form method="POST" action="{{route('submit')}}">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Nome Completo">
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" name="number" placeholder="Numero">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <textarea name="message" class="form-control" id="" cols="30" rows="10" placeholder="Messaggio"></textarea>
                            </div>
                            <button type="submit" class="btn">Invia</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down" data-aos-duration="1500">
                <img src="{{asset('/images/assistenza.png')}}" alt="" class="img-fluid d-none d-lg-block">
            </div>
        </div>
    </div>
</section>