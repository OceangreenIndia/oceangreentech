        <footer>
            <section id="footer">
                <div class="container">
                    <div class="row">
                        <?php for($i=0; $i<4; $i++){?>
                            <div class="col-md-3">
                                <ul class="list-group">
                                    <li class="list-group-item"><h5>Social Links</h5></li>
                                    <li class="list-group-item">Facebook</li>
                                    <li class="list-group-item">Twitter</li>
                                    <li class="list-group-item">Github</li>
                                    <li class="list-group-item">Msginc</li>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5 class="copyrightText">Copyright  <?php echo date('Y') ?> Oceangreen Technology</h5>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <?php wp_footer(  ) ?>
    </body>
</html>