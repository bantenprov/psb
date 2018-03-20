<template>
	<div>
    <div class="home-header header-bgimage">

      <nav class="home-header-navbar navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
          <router-link class="navbar-brand d-flex flex-row align-items-center text-uppercase" :to="{ name: 'home' }" exact>
            <img class="mr-2" src="/images/logo.png" width="36" height="36">
            <span>PPDB BANTEN</span>
          </router-link>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
              <li v-if="authenticated" class="nav-item">
                <a @click.prevent="logout" class="nav-link" href="#">
                  <i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Logout
                </a>
              </li>
              <template v-else>
                <li class="nav-item">
                  <router-link class="nav-link" :to="{ name: 'register' }"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> Register</router-link>
                </li>
              </template>
            </ul>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navbar -->

      <div class="container">
        <div class="home-header-content d-flex flex-column justify-content-center py-5">
          <div>
            <h1 class="home-header-title">PPDB <strong class="text-warning"> 2018</strong></h1>
          <p class="home-header-description mb-5 wow fadeInUp">Pendaftaran Peserta Didik Baru <br>SMA SMK Negeri Provinsi Banten.</p>
            <Countdown deadline="June 01, 2018"></Countdown>
            <p class="mb-0">
              <router-link class="btn btn-lg btn-light d-block d-sm-inline-block px-5 mx-2 mb-3 mb-sm-0 animated slideInLeft" :to="{ name: 'dashboard' }"><i class="fa fa-th-large" aria-hidden="true"></i> Dashboard</router-link>
              <router-link v-if="!authenticated" class="btn btn-lg btn-outline-light d-block d-sm-inline-block px-5 mx-2 mb-3 mb-sm-0 animated slideInRight" :to="{ name: 'login' }"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</router-link>
            </p>
          </div>
        </div>
      </div><!-- /.container -->

      
	  </div><!-- /.banner -->

		<section class="home-section home-section-1a">
	    <div class="container">
        <h2>Asas PPDB</h2>
        <p class="lead">Pendidikan merupakan hak setiap warga negara yang harus dipenuhi pemerintah dengan tidak memandang perbedaan suku, ras, agama, maupun ekonomi.</p>
        <div class="row">
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="200ms"> <i class="fa fa-bullseye ikon"></i>
            <h4><strong>Objektif</strong></h4>
            <p>Penerimaan Peserta Didik Baru harus memenuhi ketentuan umum serta sesuai ketentuan peraturan perundang-undangan yang berlaku.</p>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="400ms"> <i class="fa fa-search ikon"></i>
            <h4><strong>Transparan</strong></h4>
            <p>Pelaksanaan penerimaan Peserta Didik Baru bersifat terbuka dan dapat diketahui oleh masyarakat, untuk menghindari penyimpangan yang mungkin terjadi.</p>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms"> <i class="fa fa-check-square ikon"></i>
            <h4><strong>Akuntabel</strong></h4>
            <p>Proses penerimaan Peserta Didik Baru dapat dipertanggung jawabkan baik prosedur maupun hasilnya.</p>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="800ms"> <i class="fa fa-balance-scale ikon"></i>
            <h4><strong>Berkeadilan</strong></h4>
            <p>Penerimaan Peserta Didik Baru tidak membeda-bedakan ras, suku, agama, tingkat ekonomi, maupun keterbatasan lainnya serta sesuai ketentuan umum dan perundang-undangan yang berlaku.</p>
          </div>
        </div>        
	    </div>      
		</section>

		<section class="home-section home-section-2">
	    <div class="container">
        <h2>Ulama</h2>
        <p class="lead">Karena kemasyhurannya, <strong>Syekh Nawawi al-Bantani</strong> kemudian dijuluki Sayyid Ulama al-Hijaz (Pemimpin Ulama Hijaz), al-Imam al-Muhaqqiq wa al-Fahhamah al-Mudaqqiq (Imam yang Mumpuni ilmunya), A'yan Ulama al-Qarn al-Ram Asyar li al-Hijrah (Tokoh Ulama Abad 14 Hijriyah), hingga Imam Ulama al-Haramain, (Imam 'Ulama Dua Kota Suci).</p>
	      <img class="home-section-img" src="https://placehold.it/1200x630/eee/777/?text=IMAGE" alt="Image">
      </div>
      <svg viewBox="0 0 1280 70" preserveAspectRatio="none" id="homeSection2Curve" role="presentation" aria-hidden="true">
        <polygon points="1280 0 1280 70 0 70"></polygon>
      </svg>
		</section>

		<section class="home-section home-section-3">
	    <div class="container">
        <h2>Talk Less Do More</h2>
        <div class="row">
          <div class="col-sm-4 mb-3">
            <div class="card text-white bg-primary h-100">
              <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div><!-- /col -->
          <div class="col-sm-4 mb-3">
            <div class="card text-white bg-success h-100">
              <div class="card-body">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div><!-- /col -->
          <div class="col-sm-4 mb-3">
            <div class="card text-white bg-warning h-100">
              <div class="card-body">
                <h5 class="card-title">Info card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div><!-- /col -->
        </div><!-- /.row -->
	    </div>
      <svg viewBox="0 0 1280 70" preserveAspectRatio="none" id="homeSection3Curve" role="presentation" aria-hidden="true">
        <polygon points="1280 0 1280 70 0 70"></polygon>
      </svg>
		</section>

		<footer class="footer">
      <div class="container mt-5">
        <div class="row mb-4">
          <div class="col-md-3 mb-3">
            <h4 class="footer-title">Title One</h4>
            <ul class="footer-nav">
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
            </ul>
          </div><!-- /col -->
          <div class="col-md-3 mb-3">
            <h4 class="footer-title">Title Two</h4>
            <ul class="footer-nav">
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
            </ul>
          </div><!-- /col -->
          <div class="col-md-3 mb-3">
            <h4 class="footer-title">Title Three</h4>
            <ul class="footer-nav">
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
            </ul>
          </div><!-- /col -->
          <div class="col-md-3 mb-3">
            <h4 class="footer-title">Title Four</h4>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          </div><!-- /col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </footer>

    <footer class="footer">
      <div class="container">
        <ul class="footer-links text-center">
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
          <li><a href="#">Link 4</a></li>
          <li><a href="#">Link 5</a></li>
        </ul>
        <div class="footer-description text-center">
          <p><i class="fa fa-code" aria-hidden="true"></i> with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://github.com/bantenprov">@bantenprov</a></p>
        </div>
      </div><!-- /.container-fluid -->
    </footer>

	</div>
</template>
<style scoped>
.header-bgimage {
  background: url('/images/banner-ppdb-2.jpg') no-repeat bottom center;
  background-attachment: fixed !important; 
  background-size: cover;
}
.ikon {
  font-size: 30px;
  padding: 5px;
  color: #7891a3;
}
.home-section-1a {
  position: relative;
  padding-top: 30px;
  padding-bottom: 30px;
  color: #333;
  background-color: #E8EEEF;
  }
</style>

<script>
import { mapGetters } from 'vuex';

export default {
  computed: mapGetters({
    user: 'authUser',
    authenticated: 'authCheck'
  }),
  methods: {
    async logout () {
      // Log out the user.
      await this.$store.dispatch('logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    }
  },
  mounted () {
    var scrollpos = window.scrollY;
    var header = document.querySelector('.home-header-navbar');

    header.classList.add('animated');

    window.addEventListener('scroll', function() {
      scrollpos = window.scrollY;

      if (scrollpos > 78) {
        header.classList.remove('navbar-dark','bg-transparent');
        header.classList.add('border-bottom','border-info','navbar-light','fixed-top', 'slideInDown', 'bg-light');
      } else {
        header.classList.remove('border-bottom','border-info','fixed-top', 'slideInDown', 'navbar-light');
        header.classList.add('navbar-dark','bg-transparent');
        header.classList.remove('bg-light');
      }
    });
  }
}
</script>
<!--script>
  //countdown.
      import Countdown from 'vuejs-countdown'

      export default {
      components: { Countdown }
    }
</script-->
