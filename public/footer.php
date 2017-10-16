<center>
<i>Copyright &copy; 2015 - <?php echo date("Y"); ?> Terkadang Entahlah Ltd. All rights reserved. </i>
</center>


   <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/bootstrap.min.js"></script>

<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/ytsearch.js'></script>





</body>

</html>




<?php
if ($passive !='true')
{
        if (isset($query_echo))
        {
                $hitung=str_word_count($query_echo);
                if ($hitung>=3)
                {
                        $query_sql=mysqli_real_escape_string($conn, clean_space($query_echo));
                        $sql = "INSERT INTO terms (term) VALUES ('".$query_sql."')";
                        mysqli_query($conn, $sql);
                }

        }

        $referrer = $_SERVER['HTTP_REFERER'];
        if (!empty($referrer))
        {
            $parts_url = parse_url($referrer);
            $query = isset($parts_url['query']) ? $parts_url['query'] : '';
            if($query)
            {
                parse_str($query, $parts_query);
                $ref_keywords = isset($parts_query['q']) ? $parts_query['q'] : (isset($parts_query['query']) ? $parts_query['query'] : '' );
            }
        }
        if (isset($ref_keywords))
        {
                $hitung=str_word_count($ref_keywords);
                if ($hitung>=3)
                {
                        $query_sql=mysqli_real_escape_string($conn, $ref_keywords);
                        $sql = "INSERT INTO terms (term) VALUES ('".$query_sql."')";
                        mysqli_query($conn, $sql);
                }

        }
}
?>
