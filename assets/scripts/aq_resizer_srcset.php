<?php
//GENERATE SOURCE SET
    function generate_srcset($imgUrl, $sizes_array, $ratio_string = false) {
        $image_src_array = false;
        $imageSrcset = false;
        if ($ratio_string) {
            $ratio_array = explode("x",$ratio_string);

            $ratio = $ratio_array[1] / $ratio_array[0];
        } else {
            $ratio = false;
        }


        foreach ($sizes_array as $size) {
            $width = $size['w'];

            if (isset($size['h'])) {
                $height = $size['h'];
            } else {
                $height = false;
            }

            if (isset($size['upsize'])) {
                $upsize = $size['upsize'];
            } else {
                $upsize = false;
            }

            if (isset($size['crop'])) {
                $crop = $size['crop'];
            } else {
                $crop = true;
            }

            if ($height == '-1') {
                $crop = false;
            }

            if (! $height && $ratio) {
                $height = round($width * $ratio);
            }

            $img = aq_resize($imgUrl, $width, $height, $crop, false, $upsize);

            $resized_src = $img[0];
            $resized_width = $img[1];
            $resized_height = $img[2];

            if ($resized_width == $width) {

                $image_src_array[] = array(
                    'src' => $resized_src,
                    'w' => $resized_width,
                    'h' => $resized_height
                );

            }

        }

        if ($image_src_array) {

            $i = 1;

            foreach ($image_src_array as $image) {
                if ($image['src']) {
                    if ($i == 1) {
                        $imageSrcset .= $image['src']." ".$image['w']."w ".$image['h']."h, ";
                    } else {
                        $imageSrcset .= $image['src']." ".$image['w']."w, ";
                    }

                    $i++;
                }
            }

        }

        $imageSrcset = substr($imageSrcset, 0, -2);

        return $imageSrcset;
    }

?>
