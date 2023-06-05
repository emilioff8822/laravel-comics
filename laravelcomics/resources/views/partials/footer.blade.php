  <footer>
      <div class="container">
          <div class="row row1">
              <div class="footer-item" v-for="(item, index) in footerImages" :key="index">
                  <img class="footer-image" :src="getImage(item.src)" :alt="item.alt">
                  <span class="footer-text">{{ item . text }}</span>
              </div>
          </div>

          <div class="row row2">
              <div class="column column1">
                  <h4>DC COMICS 1</h4>
                  <ul class="footer-menu">
                      <li v-for="(item, key) in list1" :key="key" @mouseover="onMouseOver(item)"
                          @mouseout="onMouseOut" :class="{ active: hoveredItem === item }">{{ item . text }}</li>
                  </ul>
                  <h4>SHOP</h4>
                  <ul class="footer-menu">
                      <li v-for="(item, key) in list4" :key="key" @mouseover="onMouseOver(item)"
                          @mouseout="onMouseOut" :class="{ active: hoveredItem === item }">{{ item . text }}</li>
                  </ul>
              </div>
              <div class="column column2">
                  <h4>DC</h4>
                  <ul class="footer-menu">
                      <li v-for="(item, key) in list2" :key="key" @mouseover="onMouseOver(item)"
                          @mouseout="onMouseOut" :class="{ active: hoveredItem === item }">{{ item . text }}</li>
                  </ul>
              </div>
              <div class="column column3">
                  <h4>SITES</h4>
                  <ul class="footer-menu">
                      <li v-for="(item, key) in list3" :key="key" @mouseover="onMouseOver(item)"
                          @mouseout="onMouseOut" :class="{ active: hoveredItem === item }">{{ item . text }}</li>
                  </ul>
              </div>

              <div class="column column4">
                  <img class="logo" src="../assets/img/dc-logo-bg.png" alt="logo">
              </div>
          </div>

          <div class="row row3">
              <button class="sign-up-btn">SIGN-UP NOW</button>
              <div class="follow-us">
                  <span>FOLLOW US</span>
                  <img v-for="(icon, index) in socialIcons" :key="index" :src="getImage(icon.src)"
                      :alt="icon.alt" @mouseover="onIconMouseOver($event, icon.alt)"
                      @mouseout="onIconMouseOut($event)" :class="{ 'icon-hover': hoveredIcon === icon.alt }">
              </div>
          </div>
      </div>
  </footer>
