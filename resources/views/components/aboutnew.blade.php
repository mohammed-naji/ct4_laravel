<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    {{ $title ?? '' }}
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</section>
