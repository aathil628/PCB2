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
                    <a href="#" class="nav-link" data-section="profileLogout" style="color:#26355d;">Logout</a>
                    <a href="#" class="nav-link" data-section="profileDelete" style="color:#BD362F;">Delete Account</a>
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
                    <form id="profileInlineForm" style="max-width:480px;">
                        <div class="mb-2" style="display:flex;align-items:center;gap:10px;max-width:480px;">
                            <div style="flex:1;">
                                <label class="form-label" style="font-weight:500; color:#26355D;">Name</label>
                                <input type="text" class="form-control" id="profile_name" style="background:#F7F9FD;" readonly>
                            </div>
                            <button type="button" id="editNameBtn" class="btn mt-4" title="Edit Name" style="background:#6B73FF;color:#fff;white-space:nowrap;">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button type="submit" id="saveNameBtn" class="btn mt-4" style="display:none;background:#6B73FF;color:#fff;">Save</button>
                        </div>
                        <div class="mb-3" style="max-width:480px;">
                            <p id="profile_email_text" style="margin:0;color:#26355D;background:#F7F9FD;padding:.55rem .75rem;border-radius:.375rem;">
                                <!-- filled via JS -->
                            </p>
                        </div>
                    </form>
                    <div class="mt-5">
                        <h3 style="color:#26355D; font-weight:600;">Purchased Courses</h3>
                        <div id="purchasedMainList" class="mt-3" style="background:#fff;border-radius:16px;padding:1rem;box-shadow:0 3px 6px rgba(0,0,0,0.05);"></div>
                    </div>
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

            <!-- Delete Account View -->
            <div id="profileDelete" class="profile-section mx-3 my-3" style="display:none;">
                <h2 style="color:#BD362F; font-weight:600;" class="px-3 my-4">Delete Account</h2>
                <p style="color:#606580;" class="px-3 my-2">This action is permanent and cannot be undone.</p>
                <div class="px-3 my-4" style="max-width:420px;">
                    <button type="button" id="openDeleteModalBtn" class="btn" style="background:#BD362F;color:#fff;border-radius:22px;">Delete Account</button>
                    <form id="deleteAccountForm" method="POST" action="{{ route('profile.destroy') }}" style="display:none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>

            <!-- Confirm Delete Modal -->
            <div id="deleteConfirmModal" style="display:none;position:fixed;inset:0;z-index:1050;background:rgba(0,0,0,0.5);">
                <div style="max-width:460px;margin:10% auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.2);">
                    <div style="padding:16px 20px;border-bottom:1px solid #eee;display:flex;align-items:center;gap:10px;">
                        <span class="icon-alert" style="color:#BD362F"></span>
                        <h4 style="margin:0;color:#26355D;">Confirm Deletion</h4>
                    </div>
                    <div style="padding:18px 20px;color:#606580;">
                        Are you sure you want to permanently delete your account? This cannot be undone.
                    </div>
                    <div style="padding:14px 20px;border-top:1px solid #eee;display:flex;justify-content:flex-end;gap:10px;">
                        <button type="button" id="cancelDeleteBtn" class="btn" style="background:#F1F3F7;color:#26355D;border-radius:22px;">Cancel</button>
                        <button type="button" id="confirmDeleteBtn" class="btn" style="background:#BD362F;color:#fff;border-radius:22px;">Delete</button>
                    </div>
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
        this.style.color = this.dataset.section === 'profileDelete' ? "#BD362F" : "#6B73FF";
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
        const nameInput = document.querySelector('#profile_name');
        const emailText = document.querySelector('#profile_email_text');
        if (nameInput) nameInput.value = data.name || '';
        if (emailText) emailText.textContent = data.email || '';

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


// Inline name edit/save
const editBtn = document.getElementById('editNameBtn');
const saveBtn = document.getElementById('saveNameBtn');
const nameField = document.getElementById('profile_name');
const profileInlineForm = document.getElementById('profileInlineForm');

if (editBtn && nameField && saveBtn) {
    editBtn.addEventListener('click', function(){
        nameField.readOnly = false;
        nameField.focus();
        saveBtn.style.display = 'inline-block';
    });
}

if (profileInlineForm) {
    profileInlineForm.addEventListener('submit', function(e){
        e.preventDefault();
        const name = nameField.value;
        fetch('{{ route('profile.update') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ name: name })
        })
        .then(r=>r.json())
        .then(data=>{
            if (data.success) {
                toastr.success(data.message || 'Profile updated successfully!', 'Success!', { timeOut: 2000 });
                nameField.readOnly = true;
                saveBtn.style.display = 'none';
            } else {
                toastr.error(data.message || 'Failed to update profile.', 'Error!');
            }
        })
        .catch(()=> toastr.error('An error occurred. Please try again.', 'Error!'))
    });
}

// Delete Account modal handlers
const deleteModal = document.getElementById('deleteConfirmModal');
const openDeleteBtn = document.getElementById('openDeleteModalBtn');
const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');
const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
const deleteForm = document.getElementById('deleteAccountForm');

if (openDeleteBtn && deleteModal) {
    openDeleteBtn.addEventListener('click', () => {
        deleteModal.style.display = 'block';
    });
}
if (cancelDeleteBtn && deleteModal) {
    cancelDeleteBtn.addEventListener('click', () => {
        deleteModal.style.display = 'none';
    });
}
if (confirmDeleteBtn && deleteForm) {
    confirmDeleteBtn.addEventListener('click', () => {
        deleteForm.submit();
    });
}

// No JS needed for logout; form posts directly with CSRF

</script>

<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />
@endsection
