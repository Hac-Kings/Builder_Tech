<section id="contacts" class="d-flex align-items-center py-5 bg-second">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right" data-aos-duration="1500">
                <div style="width: 90%;">
                    <div class="text-center text-lg-start py-4 pt-lg-0">
                        <p>CONTACT</p>
                        <h2 class="py-2">Send your query</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos dicta mollitia totam explicabo obcaecati quia laudantium repudiandae.</p>
                    </div>
                    <div>
                        <form method="POST" action="{{route('submit')}}">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Enter name">
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" name="number" placeholder="Enter number">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Enter email">
                            </div>
                            <div class="mb-3">
                                <textarea name="message" class="form-control" id="" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down" data-aos-duration="1500">
                <img src="{{asset('/images/contact.jpg')}}" alt="" class="img-fluid d-none d-lg-block">
            </div>
        </div>
    </div>
</section>