
<nav>
  <a type="button" class="navbutton" href="/">Home</a>
  <x-category-dropdown  />
  
  @guest
  <a type="button" class="navbutton" href="/register">Register</a>
  <a type="button" class="navbutton" href="/login">Login</a>
  @else
    
   <x-admin-dropdown />
       
  @endguest
  
  <form action="" method="get">
    <input type="text" name="search" placeholder="Search" >
    <button class="navbutton" type="submit">Search</button>
  </form>
  </nav>
