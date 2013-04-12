/*
 * DUTBS Web presence - Some CSS tricks
 *
 *  Copyright 2012 Jan Minar <rdancer@rdancer.org>
 */

/*
 * Search for a <li> element within the header whose href attribute points to
 * the current URL.  Mark this element as the current tab.  CSS will pick up on
 * it, and style appropriately.
 *
 * XXX Simplify the work-flow.  Surely doing a brute-force
 * getElementsByTagName("li") is unnecessary
 */
function highlightCurrentTab()
{
  var listItems = document.getElementsByTagName("li");
  var frontPageTabLabel = "About";

  for (var i = 0; i < listItems.length; i++)
  {
    if (listItems[i].parentNode.parentNode.id == "header")
    {
      if (listItems[i].firstChild.href == document.location)
      {
	listItems[i].firstChild.className += " currentTab";
	return;
      }
      else if (listItems[i].firstChild.innerText == frontPageTabLabel)
      {
	/* The root (front) page is a special case */
	var rootPathLocation = document.getElementById("logo").firstChild.href;
	if (document.location == rootPathLocation)
	{
	  listItems[i].firstChild.className += " currentTab";
	  return;
	}
      }
    }
  }
}
