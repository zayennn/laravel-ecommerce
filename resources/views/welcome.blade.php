<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NamaToko - E-commerce Modern</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('home/style.css') }}">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header-top">
            <div class="container header-top-content">
                <div class="header-top-left">
                    <a href="#"><i class="fas fa-phone"></i> +62 123 456 789</a>
                    <a href="#"><i class="fas fa-envelope"></i> info@namatoko.com</a>
                </div>
                <div class="header-top-right">
                    <a href="#"><i class="fas fa-user"></i> Akun Saya</a>
                    <a href="#"><i class="fas fa-heart"></i> Wishlist</a>
                </div>
            </div>
        </div>

        <div class="header-main">
            <div class="container header-content">
                <div class="logo">NamaToko</div>

                <div class="search-bar">
                    <input type="text" placeholder="Cari produk...">
                    <button><i class="fas fa-search"></i></button>
                </div>

                <div class="header-icons">
                    <div class="header-icon">
                        <a href="{{ route('login') }}">
                            @if (auth()->check())
                                <i class="fa-solid fa-gauge"></i>
                            @else
                                <i class="fa-solid fa-right-to-bracket"></i>
                            @endif
                        </a>
                    </div>
                    <div class="header-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="header-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">3</span>
                    </div>
                </div>
            </div>
        </div>

        <nav>
            <div class="container">
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Produk</a></li>
                    <li><a href="#">Kategori</a></li>
                    <li><a href="#">Promo</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Slider -->
    <section class="hero">
        <div class="hero-slide active"
            style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
            <div class="container">
                <div class="slide-content">
                    <h2>Diskon Besar-Besaran hingga 50%</h2>
                    <p>Temukan berbagai produk terbaru dengan kualitas terbaik dan harga terjangkau hanya di toko kami.
                    </p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="hero-slide"
            style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1556906781-2f0520405b71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
            <div class="container">
                <div class="slide-content">
                    <h2>Koleksi Terbaru 2023</h2>
                    <p>Dapatkan produk terbaru dengan desain modern dan tren terkini.</p>
                    <a href="#" class="btn btn-primary">Lihat Koleksi</a>
                </div>
            </div>
        </div>
        <div class="hero-slide"
            style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1608506375591-b91b98fe3185?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
            <div class="container">
                <div class="slide-content">
                    <h2>Gratis Ongkir Selama Promo</h2>
                    <p>Beli produk apapun dan dapatkan gratis ongkir ke seluruh Indonesia.</p>
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="hero-controls">
            <div class="control-dot active"></div>
            <div class="control-dot"></div>
            <div class="control-dot"></div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <div class="container">
            <div class="section-title">
                <h2>Kategori Populer</h2>
            </div>

            <div class="category-grid">
                <div class="category-card">
                    <div class="category-img">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <div class="category-info">
                        <h3>Fashion</h3>
                        <p>200+ Produk</p>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-img">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="category-info">
                        <h3>Elektronik</h3>
                        <p>150+ Produk</p>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-img">
                        <i class="fas fa-couch"></i>
                    </div>
                    <div class="category-info">
                        <h3>Furniture</h3>
                        <p>80+ Produk</p>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-img">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="category-info">
                        <h3>Dapur</h3>
                        <p>120+ Produk</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products">
        <div class="container">
            <div class="section-title">
                <h2>Produk Unggulan</h2>
            </div>

            <div class="product-grid">
                <div class="product-card">
                    <span class="product-badge">New</span>
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            alt="Smart Watch">
                        <div class="product-actions">
                            <div class="action-btn"><i class="fas fa-heart"></i></div>
                            <div class="action-btn"><i class="fas fa-shopping-cart"></i></div>
                            <div class="action-btn"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Smart Watch Series 5</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 1.299.000</span>
                            <span class="old-price">Rp 1.599.000</span>
                        </div>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-count">(42)</span>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <span class="product-badge">Sale</span>
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            alt="Sepatu Sport">
                        <div class="product-actions">
                            <div class="action-btn"><i class="fas fa-heart"></i></div>
                            <div class="action-btn"><i class="fas fa-shopping-cart"></i></div>
                            <div class="action-btn"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Sepatu Sport Premium</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 799.000</span>
                            <span class="old-price">Rp 999.000</span>
                        </div>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-count">(28)</span>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            alt="Tas Ransel">
                        <div class="product-actions">
                            <div class="action-btn"><i class="fas fa-heart"></i></div>
                            <div class="action-btn"><i class="fas fa-shopping-cart"></i></div>
                            <div class="action-btn"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Tas Ransel Modern</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 459.000</span>
                        </div>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-count">(65)</span>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <span class="product-badge">Hot</span>
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            alt="Headphone">
                        <div class="product-actions">
                            <div class="action-btn"><i class="fas fa-heart"></i></div>
                            <div class="action-btn"><i class="fas fa-shopping-cart"></i></div>
                            <div class="action-btn"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Headphone Wireless</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 899.000</span>
                            <span class="old-price">Rp 1.199.000</span>
                        </div>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-count">(37)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Banner -->
    <section class="promo-banner">
        <div class="container">
            <div class="banner-container">
                <div class="banner">
                    <div class="banner-content">
                        <h3>Special Offer</h3>
                        <p>Dapatkan diskon hingga 30% untuk semua produk fashion</p>
                        <a href="#" class="btn btn-primary">Belanja Sekarang</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1534452203293-494d7ddbf7e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="Fashion" class="banner-image">
                </div>

                <div class="banner">
                    <div class="banner-content">
                        <h3>New Collection</h3>
                        <p>Koleksi elektronik terbaru dengan teknologi canggih</p>
                        <a href="#" class="btn btn-primary">Jelajahi</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1468436139062-f60a71c5c892?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80"
                        alt="Electronics" class="banner-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <h3>Berlangganan Newsletter</h3>
            <p>Dapatkan informasi tentang produk terbaru dan penawaran eksklusif dengan berlangganan newsletter kami</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Masukkan email Anda">
                <button type="submit">Berlangganan</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h4>Tentang Kami</h4>
                    <p>NamaToko adalah e-commerce terpercaya yang menyediakan berbagai produk berkualitas dengan harga
                        terbaik.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h4>Informasi</h4>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Hubungi Kami</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Layanan Pelanggan</h4>
                    <ul>
                        <li><a href="#">Bantuan</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Pengembalian</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Cara Berbelanja</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Kontak</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Contoh No. 123, Jakarta</li>
                        <li><i class="fas fa-phone"></i> +62 123 456 789</li>
                        <li><i class="fas fa-envelope"></i> info@namatoko.com</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2023 NamaToko. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('home/script.js') }}"></script>
</body>

</html>