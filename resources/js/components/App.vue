<template>
  <div oncontextmenu="return false" class="snippet-body div-body">
    <div id="body-pd">

      <header class="header" id="header">
        <div class="header_toggle">
          <i class="bx bx-menu" id="header-toggle"></i>
        </div>
        <div class="header_img">
          <!-- <img src="https://i.imgur.com/hczKIze.jpg" alt="" /> -->
           <img src="/images/mcc.jpg"  alt="">
        </div>
      </header>

      <div class="l-navbar" id="nav-bar">
        <nav class="nav">
          <div>
          <div class="responsive-logo">
            <img src="/images/mcc.jpg"  alt="">
          </div><!--
            <a href="#" class="nav_logo">
              <i class="bx bx-layer nav_logo-icon"></i>
              <span class="nav_logo-name">MCC Inventory</span>
            </a>-->
            <hr />
             <div class="nav_list">
              <!-- <a href="#" class="nav_link active">
                <i class="bx bx-grid-alt nav_icon"></i>
                <span class="nav_name">Dashboard</span>
              </a>  -->
            
              <router-link class="link-light nav_link" to="/dashboard">
                <i class="bx bx-grid-alt nav_icon"> Dashboard</i>
              </router-link>
              

              <router-link class="link-light nav_link" to="/supplier">
                <i class="bx bx-user nav_icon"> Suppliers</i>
              </router-link>

              <router-link class="link-light nav_link" to="/manufactures">
                <i class="bx bx-message-square-detail nav_icon">
                  Manufacturers</i
                >
              </router-link>

              <router-link class="link-light nav_link" to="/materials">
                <i class="bx bx-folder nav_icon"> Materials</i>
              </router-link>

              <router-link class="link-light nav_link" to="/ConstructionSites">
                <i class="bx bx-bookmark nav_icon"> Construction Sites</i>
              </router-link>

              <router-link class="link-light nav_link" to="/auditLog">
                <i class="bx bx-bar-chart-alt-2 nav_icon"> Audit Log</i>
              </router-link>

              <router-link class="link-light nav_link" to="/reportsSites">
                <i class="bx bx-folder nav_icon"> Reports</i>
              </router-link>

              <router-link class="link-light nav_link" to="/projects">
                <i class="bx bx-folder nav_icon"> Projects</i>
              </router-link>

              <router-link class="link-light nav_link" to="/users">
                <i class="bx bx-user nav_icon"> Users</i>
              </router-link>

              <router-link class="link-light nav_link" to="/settings">
                <i class="bx bx-folder nav_icon"> Settings</i>
              </router-link>
            </div>
          </div>
          <a href="logout" class="nav_link">
            <i class="bx bx-log-out nav_icon"></i>
            <span class="nav_name">Log Out</span>
          </a>
        </nav>
      </div>
      <!--Container Main start-->
      <div class="height-100 bg-light">
        <br />
        <h4>Main Components</h4>
        <router-view></router-view>
      </div>
      <!--Container Main end-->
    </div>
  </div>
  <footer class="mt-auto text-white-50">
    <p>© 2022 made by UIP Dev Interns.</p>
  </footer>
</template>

<script>
export default {};
</script>
<style>
</style>