<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
              @if (auth()->check())
                 @if (auth()->user()->hasAnyRole('admin'))
                    <li class="has-submenu">
                      <a href="#"><i class="ti-light-bulb"></i>Yönetim</a>
                      <ul class="submenu">
                          <li class="has-submenu">
                              <a href="#">Kargo</a>
                              <ul class="submenu">
                                  <li><a href="{{route('admin.shipping_companies.index')}}">Kargoları listele</a></li>
                                  <li><a href="{{route('admin.shipping_companies.create')}}">Kargo Firması ekle</a></li>
                              </ul>
                          </li>
                          <li class="has-submenu">
                              <a href="#">Ödeme metodu</a>
                              <ul class="submenu">
                                  <li><a href="form-elements.html">Ödeme metodlarını listele</a></li>
                                  <li><a href="form-validation.html">Ödeme metodu ekle</a></li>
                              </ul>
                          </li>
                          <li class="has-submenu">
                              <a href="#">Sipariş durumu</a>
                              <ul class="submenu">
                                  <li><a href="form-elements.html">Sipariş durumlarını listele</a></li>
                                  <li><a href="form-validation.html">Sipariş durumu ekle</a></li>
                              </ul>
                          </li>
                          <li class="has-submenu">
                              <a href="#">Ürünler</a>
                              <ul class="submenu">
                                  <li><a href="form-elements.html">Ürünleri listele</a></li>
                                  <li><a href="form-validation.html">Ürün ekle</a></li>
                              </ul>
                          </li>
                          <li class="has-submenu">
                              <a href="#">Kullanıcı</a>
                              <ul class="submenu">
                                  <li><a href="{{route('admin.user.index')}}">Kullanıcıları listele</a></li>
                                  <li><a href="{{route('admin.user.create')}}">Kullanıcı ekle</a></li>
                              </ul>
                          </li>
                          <li class="has-submenu">
                              <a href="#">Reklam</a>
                              <ul class="submenu">
                                  <li><a href="#">Reklam giderlerini listele</a></li>
                                  <li><a href="#">Reklam gideri ekle</a></li>
                              </ul>
                          </li>
                      </ul>
                    </li>
                  @endif
                @endif
                <li class="has-submenu">
                  <a href="#"><i class="ti-light-bulb"></i>Siparişler</a>
                  <ul class="submenu">
                      <li class="has-submenu">
                          <a href="#">Sipariş</a>
                          <ul class="submenu">
                              <li><a href="#">Tüm Siparişleri listele</a></li>
                              <li><a href="#">Sipariş ekle</a></li>
                              <li><a href="#">Günlük Siparişler</a></li>
                          </ul>
                      </li>
                  </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="ti-home"></i>Dashboard</a>
                </li>
            </ul>
            <!-- End navigation menu -->
        </div> <!-- end #navigation -->
    </div> <!-- end container -->
</div> <!-- end navbar-custom -->
