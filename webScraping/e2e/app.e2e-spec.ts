import { WebScrapingPage } from './app.po';

describe('web-scraping App', () => {
  let page: WebScrapingPage;

  beforeEach(() => {
    page = new WebScrapingPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
