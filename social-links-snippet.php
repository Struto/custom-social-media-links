
<!-- Full Share Links -->
<div class="share-article">
    <ul class="full-socialshare">
        <li class="linkedin">
            <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink();?>&title=<?php echo mastermind_get_qtrans_text( $p->post_title );?>&summary=<?php the_excerpt();?>%20source=mastermind.eu" target="_blank">
                <i class="fa fa-linkedin"></i>
                <span>LinkedIn</span>
            </a>
        </li>
        <li class="facebook">
            <!-- <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog', 'width=626,height=436');" > -->
            <?php
                $titl = get_the_title();
                $summ = get_the_excerpt();
                $ur = get_the_permalink();

                $title=urlencode($titl);
                $url=urlencode($ur);
                $summary=urlencode( $summ );
                $image=urlencode('http://www.mastermind.eu/wp-content/themes/mastermind_ver_2/img/facebook_share.png');
            ?>
            <a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)">
                <i class="fa fa-facebook"></i>
                <span>Facebook</span>
            </a>
        </li>
        <li class="twitter">
            <!--
            <a href="http://twitter.com/share?text=<?php echo mastermind_get_qtrans_text( $p->post_title ); ?>&url=<?php the_permalink();?>&via=mastermind_eu&related=<?php echo mastermind_get_qtrans_text( $p->post_title ); ?>" title="Share on Twitter" rel="nofollow" target="_blank"">
            -->
            <a href="http://twitter.com/share?text=<?php echo mastermind_get_qtrans_text( $p->post_title ); ?>&url=<?php the_permalink();?>&via=mastermind_eu" title="Share on Twitter" rel="nofollow" target="_blank"">
                <i class="fa fa-twitter"></i>
            <span>Twitter</span>
            </a>
        </li>
        <li class="googleplus">
            <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank">
                <i class="fa fa-google-plus"></i>
                <span>Google+</span>
            </a>
        </li>
        <li class="mail">
            <a href="javascript:emailCurrentPage()">
                <i class="fa fa-envelope"></i>
                <span>Email</span>
            </a>
        </li>
        <li class="print">
            <a href="javascript:window.print()">
                <i class="fa fa-print"></i>
                <span>Print</span>
            </a>
        </li>
    </ul>
</div>

<!-- Email Script -->
<script language="javascript">
    function emailCurrentPage(){
        window.location.href="mailto:?subject=<?php echo mastermind_get_qtrans_text( $p->post_title ); ?>+&body=Download <?php echo mastermind_get_qtrans_text( $p->post_title ); ?> : <?php the_permalink(); ?>";
    }
</script>
