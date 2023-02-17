<nav id="sidebar">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
        </button>
    </div>
    <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
        <div class="user-logo">
            <div class="img" style="background-image: url(admin/images/logo.jpg);"></div>
            <h3>{{ Session()->get('member') }}</h3>
        </div>
    </div>
    <ul class="list-unstyled components mb-5">
        <li class="active">
            <a href="/en/app"><span class="fa fa-home mr-3"></span> Dashboard</a>
        </li>
        <li>
            <a href="/app/orders"><span class="fa fa-home mr-3"></span> Order Requests</a>
        </li>
        <li>
            <a href="/app/tour-plan-requests"><span class="fa fa-home mr-3"></span> Tour Plan Requests</a>
        </li>
        <li>
            <a href="/app/clients"><span class="fa fa-home mr-3"></span> Client Management</a>
        </li>
        <li>
            <a href="/app/destinations"><span class="fa fa-gift mr-3"></span> Destination Management</a>
        </li>
        <li>
            <a href="/app/contact-messages"><span class="fa fa-gift mr-3"></span> Contact Messages</a>
        </li>
        <li>
            <a href="/app/vehicles"><span class="fa fa-trophy mr-3"></span> Vehicle Management</a>
        </li>
        <li>
            <a href="/app/users"><span class="fa fa-cog mr-3"></span> User Management</a>
        </li>
        <li>
            <a href="/app/signout"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
        </li>
    </ul>

</nav>