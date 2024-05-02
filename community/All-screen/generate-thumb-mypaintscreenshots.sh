#!/bin/bash 
# GnuGPL 3.0 ; V.1 special Mypaint gallery; 9 sept 2011
# by Deevad, humbly done with my noob skill in sh

# configuration
FOLDERPROJECT="output"
SUBFOLDERTHUMB="thumbnails"
OUTPUTHTML="out.html"

# environnement
mkdir $FOLDERPROJECT
mkdir $FOLDERPROJECT/$SUBFOLDERTHUMB

# loop on JPG
for sourcespictures in *.jpg ; do
outputpicturesthumbs=${sourcespictures/.jpg/_thumb.jpg}
picturesname=${sourcespictures/.jpg/ }
cleanpicturesname=${picturesname//[-_.]/ }
cleandescription=${cleanpicturesname//[1234567890]/ }

	# Communication
	echo 'Processing : '$cleandescription''

	# thumbnails creation
	convert $sourcespictures  -thumbnail '145x80>' -gravity center -background black -unsharp 0x.4 -quality 90 $outputpicturesthumbs

	# thumbnail moving
	mv $outputpicturesthumbs $FOLDERPROJECT/$SUBFOLDERTHUMB/$outputpicturesthumbs

	# fullsizes copying
	cp $sourcespictures $FOLDERPROJECT/$sourcespictures
	

	# body html : write
	echo '<a href="http://mypaint.intilinux.com/wp-content/uploads/2011/09/'$sourcespictures'" title="'$cleandescription'" rel="box" >' >> $OUTPUTHTML
	echo '<img src="http://mypaint.intilinux.com/wp-content/uploads/2011/09/'$SUBFOLDERTHUMB'/'$outputpicturesthumbs'" alt="'$cleandescription'" title="'$cleandescription'" /></a>' >> $OUTPUTHTML

	# Communications
	echo '==> OK'

done

echo 'End of my script written in september 2011 - ;-) '
echo '------------------------------------------------------------- '



