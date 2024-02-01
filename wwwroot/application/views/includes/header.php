<div class="mainHeader">
  <div class="container">
    <header>
      <div class="logo">
        <a href="<? echo site_url('');?> "> <img src="<? echo site_url('assets/images/logo.png');?>" alt="Logo" class="img-fluid"> </a>
      </div>
      <div class="navBlock">
        <div class="navbarBtn d-lg-none">
          <button type="button" id="sidebarCollapse" class="btn crossLine">
            <span class="line crossLine1"></span>
            <span class="line crossLine2"></span>
            <span class="line crossLine3"></span>
          </button>
        </div>
        <nav class="navbarLink navbar-expand-md" id="sidebar">
          <div class="navi_mobile">

            <div class="navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li <?if ($websitepagename=='index' ){?> class="active"
                  <? } ?>>
                  <a href="<? echo site_url('');?>">Home</a>
                </li> 
                <li <?if ($websitepagename=='aboutus' ){?> class="active" <? } ?>> <a href="<? echo site_url('Aboutus/index');?>">About</a>
                </li>
                


                <li <?if ($websitepagename== 'diamond' || $websitepagename=='sofpac' || $websitepagename=='partners_and_associates' || $websitepagename=='protective_sleeves' || $websitepagename=='filter_nets_and_mesh' || $websitepagename=='extruded_nets' || $websitepagename=='bud_caps' || $websitepagename=='bodyloofah' ){?> class="active dropdown" <? } else { ?> class="dropdown" <? }?>>
                  <a href="#" class="nav-link">Products</a>
                  <a class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                  <ul class="dropdown-menu">
                    <li <?if ($websitepagename== 'diamond' || $websitepagename=='partners_and_associates' || $websitepagename=='protective_sleeves' || $websitepagename=='filter_nets_and_mesh' || $websitepagename=='extruded_nets' || $websitepagename=='bud_caps' || $websitepagename=='bodyloofah' ){?> class="active dropdown submenu" <? } else { ?> class="dropdown submenu" <? }?>> 
                      <a class="nav-link">Extruted</a>
                      <a class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                      <ul class="dropdown-menu subdropdown">
                      <li <?if ($websitepagename== 'diamond' || $websitepagename=='partners_and_associates' || $websitepagename=='protective_sleeves' || $websitepagename=='filter_nets_and_mesh' || $websitepagename=='extruded_nets' || $websitepagename=='bud_caps' || $websitepagename=='bodyloofah' ){?> class="active"
                          <? } ?>><a class="dropdown-item" href="<? echo site_url('extruted/diamond');?>">Diamond</a>
                        </li>
                        
                        <li><a class="dropdown-item" href="#">Square</a></li>

                      </ul>
                    </li>
                    <li <?if ($websitepagename== 'sofpac' ){?> class="active dropdown submenu" <? } else { ?> class="dropdown submenu" <? }?>>
                      <a class="nav-link">Knitted</a>
                      <a class="dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                      <ul class="dropdown-menu subdropdown">
                        <li <?if ($websitepagename=='sofpac' ){?> class="active"
                          <? } ?>><a class="dropdown-item" href="<? echo site_url('Knitted/sofpac');?>">Sofpac</a>
                        </li>
                    </li>

                  </ul>
                </li>


              </ul>
              </li>
              <li <?if ($websitepagename=='contactus' ){?> class="active"
                  <? } ?>>
                  <a href="<? echo site_url('Contactus');?>">Contact Us</a>
              <li><a href="#"> </a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

  </div>
</div>