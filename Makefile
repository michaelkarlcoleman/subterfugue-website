# SUBTERFUGUE site makefile

#	$Header$


DESTDIR =

FILES := $(wildcard *.html *.php *.png *.patc*[a-z])
SITEHOST := shell1.sourceforge.net

.PHONY : clean install installdoc

install ::
	rsync -Cavz --rsh=ssh $(FILES) \
		$(SITEHOST):/home/groups/s/su/subterfugue/htdocs/
#	scp $(FILES) $(SITEHOST):/home/groups/subterfugue/htdocs/

installdoc ::
	install -d $(DESTDIR)/usr/share/doc/subterfugue/html
	install $(FILES) $(DESTDIR)/usr/share/doc/subterfugue/html

clean ::
	-rm -f *~
