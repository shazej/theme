import { Component} from '@angular/core';
import { Router } from '@angular/router';
import { DataService, routes, SideBarService } from 'src/app/core/core.index';

@Component({
  selector: 'app-settings-menu',
  templateUrl: './settings-menu.component.html',
  styleUrls: ['./settings-menu.component.scss'],
})
export class SettingsMenuComponent {
  public routes = routes;

  public showSettings = false;
  public showLayout = false;

  public layoutPosition = '1';
  public layoutDirection = 'ltr';

  public headerSidebarStyle = '1';
  public primarySkinStyle = '1';

  constructor(
    public sideBar: SideBarService,
    private router: Router,
    private data: DataService
  ) {
    this.sideBar.layoutPosition.subscribe((res: string) => {
      this.layoutPosition = res;
    });
    this.sideBar.layoutDirection.subscribe((res: string) => {
      this.layoutDirection = res;
    });
    this.sideBar.headerSidebarStyle.subscribe((res: string) => {
      this.headerSidebarStyle = res;
    });
    this.sideBar.primarySkinStyle.subscribe((res: string) => {
      this.primarySkinStyle = res;
    });
  }

 
  setRtlFormat(): void {
    const currentUrl = this.router.url;
    window.location.href =
      'https://kanakku.dreamguystech.com/angular/template-rtl' + currentUrl;
  }
  setLtrFormat(): void {
    // window.location.href = 'https://kanakku.dreamguystech.com/angular/template';
    localStorage.setItem('layoutDirection', 'ltr');
    this.sideBar.layoutDirection.next('ltr');
    this.sideBar.changeLayout('2');
  }
  setBoxFormat(): void {
    localStorage.setItem('layoutDirection', 'box');
    localStorage.setItem('layoutPosition', '3');
    this.sideBar.layoutDirection.next('box');
    this.sideBar.layoutPosition.next('3');
    this.routes.layoutDirection.next('');
    const currentUrl = this.router.url;
    const splitVal = currentUrl.split('/');
    const page = splitVal[2];
    if (splitVal[1] == 'rtl') {
      this.router.navigate(['/' + page]);
    }
  }

  public resetPreview(): void {
    this.showSettings = false;
    this.sideBar.changeLayout('1');
    this.sideBar.changeStyle('1');
    this.sideBar.changePrimarySkinStyle('0');
    this.setLtrFormat();
  }
}
