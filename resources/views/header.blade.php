<header class="header">
  <div class="container header-content">
    <div class="logo">Easy RentAL</div>
    <nav class="nav">
      <a href="/">HOME</a>
      <a href="{{ url('booking') }}">BIKES FOR RENT</a>
      {{-- <a href="{{ url('') }}">OUR SERVICES</a> --}}
      <a href="{{url('about')}}">ABOUT US</a>
      <a href="{{ url('faq') }}">FAQS</a>
    </nav>
  </div>
</header>

<style>
  .header {
    background: #fffafa;
    padding: 20px 0;

    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    font: bold;
  }

  .header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .logo {
    font-size: 1.8rem;
    font-weight: bold;
    color: #025CA3;
  }

  .nav a {
    margin-left: 20px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
  }

  .nav a:hover {
    color: #025CA3;
  }

  nav a {
    margin: 0 10px;
    text-decoration: none;
    color: #000;
  }
</style>