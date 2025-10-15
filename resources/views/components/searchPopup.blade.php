<!-- Search Popup -->
<div class="search-popup">
    <div class="color-layer"></div>
    <button class="close-search"><span class="far fa-times fa-fw"></span></button>
    <form method="GET" action="{{ route('course') }}">
        <div class="form-group">
            <input type="search" name="q" value="{{ request('q') }}" placeholder="Search courses" required="">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End Search Popup -->