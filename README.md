TYPO3-extension News Snapin
===========================

Layout-Container for the TYPO3 extension news, with the advantage that the content-elements can be
assigned to define-able areas. So Wiki-pages, Knowlegbases or just feature-rich articles can be 
created. Think about diagrams, tables, individual article-layouts, footnotes and individual 
extensions bound to a single article instead of a whole page.

extension-key: wdb_news_snapin

Installation:

 * On commandline: `composer require wdb/wdb-news-snapin`.
 * Update database scheme in the TYPO3 installation.
 * Include static template on a page where the news-page and the news-storage-page are included.

Below you see a screenshot of one news detail in frontend:
 * the news is the block in the center
 * surrounding blocks are added with `wdb_news_snapin` and can be changed in layout and content
   for every page

![one news detail page in frontend with surrounding blocks added with `wdb_news_snapin`](./Documentation/Images/screenshot-fe.png "one news detail page in frontend with surrounding blocks added with `wdb_news_snapin`")
