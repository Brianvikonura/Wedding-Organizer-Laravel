<div class="footer">
    <footer>
        <div class="container p-4">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="mb-3">Wedding Organizer JeWePe</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
                @foreach ($settings as $setting)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-3">Kontak Kami</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>{{ $setting->address }}</span>
                            </li>
                            <li class="mb-1">
                                <i class="fa-regular fa-envelope"></i>
                                <span>{{ $setting->email }}</span>
                            </li>
                            <li class="mb-1">
                                <i class="fas fa-phone"></i>
                                <span>{{ $setting->phone_number }}</span>
                            </li>
                            <li class="mb-1">
                                <i class="fab fa-instagram"></i>
                                <a href="#" target="_blank"
                                    class="text-decoration-none text-black">{{ $setting->instagram }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-3">Jam Operasional</h5>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>{{ $setting->time_business_hour }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center p-3">
            <script>
                document.write("© ")
                document.write(new Date().getFullYear())
            </script>
            Wedding Organizer JeWePe - <strong>All Right Reserved</strong>
        </div>
    </footer>
</div>
