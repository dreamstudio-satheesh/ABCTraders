<footer class="footer @if (Route::currentRouteName() == 'admin.footer-dark') footer-dark @elseif(Route::currentRouteName() == 'admin.footer-fixed') footer-fix @endif">
    <div class="container-fluid">
      <div class="row gy-1">
        <div class="col-lg-6 col-md-7 footer-copyright">
          <p class="mb-0 f-light f-w-500">Copyright @php echo date('Y'); @endphp © Yuri theme by pixelstrap</p>
        </div>
        <div class="col-lg-6 col-md-5">
          <div class="d-flex">
            <ul class="footer-language">
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><span class="lang-txt f-light f-w-500">English</span><span class="ms-2"> <i class="fa fa-caret-down txt-primary">          </i></span></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="English"><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="Deutsch"><span class="lang-txt">Deutsch</span></div>
                    <div class="lang" data-value="Español"><span class="lang-txt">Español</span></div>
                    <div class="lang" data-value="Français"><span class="lang-txt">Français</span></div>
                    <div class="lang" data-value="Português"><span class="lang-txt">Português<span> (BR)</span></span></div>
                    <div class="lang" data-value="简体中文"><span class="lang-txt">简体中文</span></div>
                    <div class="lang" data-value="لعربية"><span class="lang-txt">لعربية <span> (ae)  </span></span></div>
                  </div>
                </div>
              </li>
            </ul>
            <div class="lang-title f-light f-w-500"><i class="me-1" data-feather="globe"> </i><span>Select Region</span></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
