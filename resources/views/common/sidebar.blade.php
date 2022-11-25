<div class="offcanvas offcanvas-start show" style="width: 300px;" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">BHU Health Care Profiling and Reporting System</h5>
    </div>
    <div class="offcanvas-body">
        <img src="https://randomuser.me/api/portraits/men/70.jpg" alt="Avatar" class="avatar">
        <h3 class="offcanvas-user-name mt-2">{{session('fullName')}}</h3>
        <hr>
        <a href="/dashboard" class="btn col-12 mb-3 sidebar-btn"><h5><span class="mdi mdi-view-dashboard"></span> Dashboard</h5></a>
        <a href="/records" class="btn col-12 mb-3 sidebar-btn"><h5><span class="mdi mdi-book-open-page-variant"></span> Records</h5></a>
        <a href="/reports" class="btn col-12 mb-3 sidebar-btn"><h5><span class="mdi mdi-chart-areaspline-variant"></span> Reports</h5></a>
        <a href="/ICD" class="btn col-12 mb-3 sidebar-btn"><h5><span class="mdi mdi-barcode"></span> ICD Codes</h5></a>
        <a href="/logout" class="btn col-12 mb-3 sidebar-btn-logout sidebar-logout-button"><h5><span class="mdi mdi-logout-variant"></span> Logout</h5></a>
    </div>
</div>

<style>
    .offcanvas-title {
        margin-top: 30px;
    }
    .avatar {
        vertical-align: middle;
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }
    a.btn.sidebar-btn:hover {
        background-color:#2455f3c0;
    }
    a.btn.sidebar-btn-logout:hover {
        background-color:#fa6d74c0;
    }
    .sidebar-logout-button {
        margin-top: 100px;
    }
</style>