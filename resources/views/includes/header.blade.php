<div class="insidenavbar">
    <div style="width:100%;margin-top: 5px;margin-left: 5px;">
      @if(last(request()->segments())=='organizer')
       <font class="pageheader">Organizer Dashboard</font>
       @else
        <font class="pageheader">{{ ucwords(last(request()->segments())) }}</font>
       @endif
      </div>
        <div class="leftpanelinside">
          
            <input type="text" name="search" id="searchproj" placeholder="Search" style="float: left;">
        
          <div class="waves-effect waves-black center"><a href="#" class="material-icons grey-text text-darken-3">notifications</a></div>
          <div class="waves-effect waves-black center"><a href="#" class="material-icons grey-text text-darken-3">person</a></div>
          <div class="waves-effect waves-black center"><a href="/logout" class="material-icons grey-text text-darken-3" title="Logout">exit_to_app</a>
          </div>
        </div>
</div>