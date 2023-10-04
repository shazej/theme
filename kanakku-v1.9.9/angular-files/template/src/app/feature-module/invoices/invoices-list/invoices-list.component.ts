import { Component} from '@angular/core';
import { routes, CommonService } from 'src/app/core/core.index';

@Component({
  selector: 'app-invoices-list',
  templateUrl: './invoices-list.component.html',
  styleUrls: ['./invoices-list.component.scss'],
})
export class InvoicesListComponent {
  
// eslint-disable-next-line @typescript-eslint/no-explicit-any
  select_box_open: any = [];
  public routes = routes;
  currentRoute!: string;
  public base!: string;
  public page!: string;
  public last!: string;
  constructor(private common: CommonService) {
    this.common.currentRoute.subscribe((res: string) => {
      this.currentRoute = res;
    });
    this.common.pageRoute.subscribe((res: string) => {
      this.page = res?.replace('-', ' ');
    });
    this.common.baseRoute.subscribe((res: string) => {
      this.base = res?.replace('-', ' ');
    });
    this.common.lastRoute.subscribe((res: string) => {
      this.last = res?.replace('-', ' ');
    });
  }

 
  // Checkbox Select

  public openBox(val: string): void {
    if (this.select_box_open[0] != val) {
      this.select_box_open[0] = val;
    } else {
      this.select_box_open = [];
    }
  }
}
