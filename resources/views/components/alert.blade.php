@if (session('success'))    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('info'))    
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>{{ session('info') }}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('danger'))    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('danger') }}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif