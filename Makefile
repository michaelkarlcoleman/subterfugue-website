# SUBTERFUGUE site makefile

#	$Header$


FILES := $(wildcard *.html *.php *.png *.patc*[a-z])
SITEHOST := shell1.sourceforge.net

.PHONY : clean install

install ::
	scp $(FILES) $(SITEHOST):/home/groups/subterfugue/htdocs/

clean ::
	-rm -f *~
