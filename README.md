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

Important:
For TYPO3 versions lower than 11 you've to adapt the pagebrowser in List.html for news perhaps.  
With TYPO3-11 the widget API was removed and news-9.x never includes corresponding code anymore.  

Below you see a screenshot of one news detail in frontend:
 * the news is the block in the center
 * surrounding blocks are added with `wdb_news_snapin` and can be changed in layout and content
   for every news article.

![one news article in frontend with surrounding blocks added with `wdb_news_snapin`](./Documentation/Images/screenshot-fe.png "one news article in frontend with surrounding blocks added with `wdb_news_snapin`")
