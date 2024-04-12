
@include('components.error')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Quick Menu</h4>
                
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="{{route('home')}}" class="text-muted">
                            <i class="bx bx-lg bxs-home"></i>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('celebs.index')}}" class="text-muted">
                            <i class="bx bx-lg bx-list-ul text-warning"></i>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('createMail')}}">
                            <i class="bx bx-lg bx-mail-send"></i>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('fancards.index')}}">
                            <i class='bx bx-lg bxs-id-card text-warning'></i>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('prices.index')}}" >
                            <i class="bx bx-lg bxs-dollar-circle text-success"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>