<div class="column m-l-10 m-t-10 is-2">
  <aside class="menu">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{ url('/home') }}">Dashboard</a></li>
      <li><a href="{{ route('customer.index') }}">Customers</a></li>
    </ul>
    <p class="menu-label">Trains</p>
    <ul class="menu-list">
      <li><a href="{{ route('train.index') }}">Trains</a></li>
      <li><a href="{{ route('train_schedule.index') }}">Schedule Trains</a></li>
      <li><a href="{{ route('station.index') }}">Stations</a></li>
    </ul>
    <p class="menu-label">
      Transactions
    </p>
    <ul class="menu-list">
      <li><a>Payments</a></li>
      <li><a href="{{ route('booking.index') }}">Booking</a></li>
      <li><a>Customer Tickets</a></li>
    </ul>
  </aside>
</div>
