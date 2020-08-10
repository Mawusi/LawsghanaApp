<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/accounts/profile/{{ Auth::user()->id }}">Profile</a></li>
      <li class="breadcrumb-item"><a href="/accounts/manage-password">Manage Accounts</a></li>
      <li class="breadcrumb-item"><a href="/accounts/bookmarks/{{ Auth::user()->id }}">Bookmarks</a></li>
      <li class="breadcrumb-item"><a href="/accounts/downloads/{{ Auth::user()->id }}">Downloads</a></li>
      @if( Auth::user()->subscription_id == null)
          <li class="breadcrumb-item"><a style="color: red;">No Subscription</a></li>
        @else
          <li class="breadcrumb-item"><a href="/accounts/subscription/{{ Auth::user()->subscription_id }}">My Subscription</a></li>
      @endif
    </ol>
</nav>