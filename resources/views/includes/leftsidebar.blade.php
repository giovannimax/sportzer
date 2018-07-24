<ul id="slide-out" class="mysidenav sidenav sidenav-fixed">
    <li class="logoli">
        <a href="#" class="logolink"><img class="sidebarlogo" src="/images/sidebarlogo.png"></a>
    </li>
    <li><div class="divider"></div></li>
    <li><a href="#" class="white-text proflink">
      <div style="padding: 10px 0px;height: 65px;">
        <img class="circle personalpic" src="/images/avatar.jpg">
        <font style="margin:10px;">First Name</font>
      </div>
    </a></li>
    <li class="{{ Request::path() == 'organizer' ? 'active' : '' }}"><a href="/organizer" class="white-text"><i class="material-icons white-text">dashboard</i>Dashboard</a></li>
    <li class="{{ Request::path() == 'organizer/calendar' ? 'active' : '' }}"><a href="/organizer/calendar" class="white-text"><i class="material-icons white-text">date_range</i>Calendar</a></li>
    <li class="{{ Request::path() == 'organizer/events' ? 'active' : '' }}"><a href="/organizer/events" class="white-text"><i class="material-icons white-text">pool</i>Events</a></li>
    <li class="{{ Request::path() == 'organizer/news' ? 'active' : '' }}"><a href="/organizer/news" class="white-text"><i class="material-icons white-text">insert_comment</i>News</a></li>
    <li class="{{ Request::path() == 'organizer/blogs' ? 'active' : '' }}"><a href="/organizer/blogs" class="white-text"><i class="material-icons white-text">library_books</i>Blogs</a></li>
  </ul>