@extends('layouts.layout4')
@section('title', 'Profile | MyFirstPCB')
@section('content')
<x-strickyHeader />

@section('content')
<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<style>
    @media (max-width: 767px) {
    .container {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
    }
}

/* Sidebar */
#profileSidebar {
    display: flex;
    flex-direction: column;
    gap: 6px;
    padding: 0;
    margin-top: 1rem;
}

/* Sidebar links */
#profileSidebar .nav-link {
    padding: 10px 15px;
    border-radius: 8px;
    font-weight: 600;
    color: #26355d;
    background: #f7f9fd;
    transition: background 0.3s ease;
    border-left: 4px solid transparent;
}

#profileSidebar .nav-link.active {
    background: #edefff;
    color: #6B73FF;
    border-left: 4px solid #6B73FF;
}

/* Adjust sidebar for mobile */
@media (max-width: 767px) {
    #profileSidebar {
        flex-direction: row;
        justify-content: space-around;
        margin-top: 1.5rem;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 2px 15px rgba(106,115,255,0.1);
        padding: 0.5rem 0;
    }

    #profileSidebar .nav-link {
        border-left: none;
        border-bottom: 3px solid transparent;
        border-radius: 0;
        font-weight: 500;
        padding: 10px 5px;
        font-size: 0.9rem;
    }

    #profileSidebar .nav-link.active {
        border-bottom-color: #6B73FF;
        background: transparent;
        color: #6B73FF;
    }

    /* Stack main content below sidebar */
    .col-md-3 {
        max-width: 100% !important;
        flex: 0 0 100% !important;
        margin-bottom: 1rem;
        height: auto !important;
        box-shadow: none !important;
        border-radius: 12px;
        padding: 1rem;
    }

    .col-md-9 {
        max-width: 100% !important;
        flex: 0 0 100% !important;
        padding-left: 0 !important;
    }

    /* Center avatar */
    .profile-avatar {
        margin: 0 auto 1rem;
        display: flex !important;
        align-items: center;
        justify-content: center;
    }
}


/* Adjust buttons */
.btn, .btn-logout {
    border-radius: 22px !important;
    padding: 10px 18px;
    font-weight: 600;
    font-size: 1rem;
}
    .scrollable-course-list {
    max-height: 520px; /* or desired height */
    min-width: 350px;  /* min width as per your need */
    overflow-y: auto;  /* vertical scroll */
    padding-right: 10px; /* space for scrollbar */
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.05);
}

</style>

<div class="container px-2 px-md-0 " style="max-width:950px; margin-top:8rem;">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3" style="background:#fff;border-radius:18px;box-shadow:0 2px 12px rgba(106,115,255,0.10);padding:2.2rem 0;height:580px;">
            <div class="profile-avatar mb-3"
                style="width:80px;height:80px;background:#6B73FF;color:#fff;
                        border-radius:50%;display:flex !important;align-items:center;justify-content:center;
                        font-weight:700;font-size:2rem;">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>

            <div class="mt-4">
                <nav id="profileSidebar" class="nav flex-column">
                    <a href="#" class="nav-link active" data-section="profileMain" style="color:#6B73FF;font-weight:500;">Profile</a>
                    <a href="#" class="nav-link" data-section="profileEdit" style="color:#26355d;">Edit Profile</a>
                    <a href="#" class="nav-link" data-section="profileCourses" style="color:#26355d;">Purchased Courses</a>
                    <a href="#" class="nav-link" data-section="profileLogout" style="color:#26355d;">Logout</a>
                </nav>
            </div>
        </div>
        <!-- Main Content -->
        <div class="col-md-9" style="padding-left:2.5rem;">
            <!-- Profile View -->
            <div id="profileMain" class="profile-section">
                <h2 style="color:#26355D; font-weight:600; text-align: center;"> Profile</h2>
                <p style="color:#606580; text-align:center;">Add information about yourself</p>
                <div style="margin-top:2.5rem;">
                    <div class="mb-3" style="max-width:340px;">
                        <label class="form-label" style="font-weight:500; color:#26355D;">Name:</label>
                        <!-- <input type="text" class="form-control" value="S." style="margin-bottom:0.7rem; background:#F7F9FD;"> -->
                        <input type="text" class="form-control" id="profile_name" style="background:#F7F9FD;" readonly>
                    </div>  
                    <div class="mb-3" style="max-width:340px;">
                        <label class="form-label"  style="font-weight:500; color:#26355D;">Email</label>
                        <input type="email" id="profile_email" class="form-control" style="background:#F7F9FD;" readonly>
                    </div>
                    <div class="mb-3" style="max-width:400px;">
                        <label class="form-label" style="font-weight:500; color:#26355D;">Reason</label>
                        <textarea class="form-control" id="profile_reason" rows="3"  style="background:#F7F9FD;" readonly></textarea>
                        <!-- <small class="form-text" style="color:#757582;">Links and coupon codes are not permitted in this section.</small> -->
                    </div>
                    <div class="mt-5">
                        <h3 style="color:#26355D; font-weight:600;">Purchased Courses</h3>
                        <div id="purchasedMainList" class="mt-3" style="background:#fff;border-radius:16px;padding:1rem;box-shadow:0 3px 6px rgba(0,0,0,0.05);"></div>
                    </div>
                </div>
            </div>
            <!-- Edit Profile View -->
            <div id="profileEdit" class="profile-section" style="display:none;">
                <h2 style="color:#26355D; font-weight:600; text-align: center;">Edit Profile</h2>
                <form style="margin-top:2rem;max-width:400px;" id="profileEditForm" method="POST" action="{{ route('profile.update') }}">
                     @csrf
                    <div class="mb-3">
                        <label class="form-label" style="color:#26355D;">Name</label>
                        <input type="text" class="form-control" style="background:#F7F9FD;" id="edit_name" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color:#26355D;">Email</label>
                        <input type="email" class="form-control" style="background:#F7F9FD;" value="{{ Auth::user()->email }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"  style="color:#26355D;">Reason</label>
                        <textarea class="form-control" rows="3" style="background:#F7F9FD;" id="edit_reason"></textarea>
                    </div>
                    <button type="submit" class="btn" style="background:#6B73FF;color:#fff;border-radius:22px;">Save Changes</button>
                </form>
            </div>
            <!-- Purchased Courses -->
            <div id="profileCourses" class="profile-section" style="display:none;">
                <h2 style="color:#26355D; font-weight:600;">Purchased Courses</h2>
                <div class="course-list mt-4 px-3 scrollable-course-list">
                </div>
            </div>
            <!-- Logout View -->
            <div id="profileLogout" class="profile-section mx-3 my-3" style="display:none;">
                <h2 style="color:#BD362F; font-weight:600;" class="px-3 my-4">Logout</h2>
                <p style="color:#606580;" class="px-3 my-4">Are you sure you want to logout?</p>
                <div class="px-3 my-4">
                    <form id="logoutForm" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn" style="background:#BD362F;color:#fff;border-radius:22px;">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.querySelectorAll('#profileSidebar .nav-link').forEach(function(nav) {
    nav.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelectorAll('#profileSidebar .nav-link').forEach(function(n) {
            n.classList.remove('active');
            n.style.color = "#26355d";
        });
        this.classList.add('active');
        this.style.color = "#6B73FF";
        document.querySelectorAll('.profile-section').forEach(function(sec) {
            sec.style.display = "none";
        });
        document.getElementById(this.dataset.section).style.display = "block";
    });
});


// Profile_details
document.addEventListener('DOMContentLoaded', function () {
    fetch('{{ route("profile.details") }}', {
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
        },
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        document.querySelector('#profile_name').value = data.name || '';
        document.querySelector('#profile_email').value = data.email || '';
        document.querySelector('#profile_reason').value = data.reason || '';

        const coursesDiv = document.getElementById('profileCourses');
        const purchasedMainList = document.getElementById('purchasedMainList');
        if (coursesDiv && data.courses && data.courses.length > 0) {
            let coursesHtml = '';

            data.courses.forEach(course => {
                coursesHtml += `
                    <div style="padding:1rem; border-bottom: 1px solid #eee; margin-bottom: 1rem;">
                        <a href=""><h5 style="color:#6B73FF;">${course.title}</h5></a>
                        <p style="color:#606580;">${course.description}</p>
                    </div>
                `;
            });

            coursesDiv.querySelector('.course-list').innerHTML = coursesHtml;
            if (purchasedMainList) purchasedMainList.innerHTML = coursesHtml;
        } else {
            const emptyHtml = `
                <div style="text-align:center; padding:2rem;">
                    <p style="color:#606580; margin-bottom:1rem;">Buy your first kit and start designing your own PCB</p>
                    <a href="{{ route('course') }}" class="btn" style="background:#6B73FF;color:#fff;border-radius:22px;">Go to Courses</a>
                </div>`;
            if (coursesDiv) {
                const tabList = coursesDiv.querySelector('.course-list');
                if (tabList) tabList.innerHTML = emptyHtml;
            }
            if (purchasedMainList) purchasedMainList.innerHTML = emptyHtml;
        }
    })
    .catch(error => {
        console.error('Error fetching profile data:', error);
    });
});


// Profile edit
const formupdate = document.getElementById('profileEditForm');

formupdate.addEventListener('submit', function(e) {

    // Get form values
    const name = document.getElementById('edit_name').value;
    const reason = document.getElementById('edit_reason').value;

    fetch('{{ route("profile.update") }}', {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ name: name, reason: reason })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            toastr.success(data.message || 'Profile updated successfully!', 'Success!', { timeOut: 2000 });
        } else {
            toastr.error(data.message || 'Failed to update profile. Please try again.', 'Error!');
        }
    })
    .catch(error => {
        console.error('Error updating profile:', error);
        toastr.error('An error occurred. Please try again.', 'Error!');
    });
});

// No JS needed for logout; form posts directly with CSRF

</script>

<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />
@endsection
