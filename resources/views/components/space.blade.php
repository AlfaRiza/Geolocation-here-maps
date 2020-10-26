<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="d-flex justify-content-between">
            <div id="create-space">
                <a href="{{ route('space.create') }}" class="btn btn-primary">PIN!</a>
            </div>
            <div id="view-space">
                <a href="{{ route('space.index') }}" class="btn btn-secondary">
                    <i class="fas fa-list"></i></a> |
                <a href="{{ route('space.browse') }}" class="btn btn-secondary">
                    <i class="fas fa-globe"></i>
                </a>
            </div>
        </div>
    </div>
</div>