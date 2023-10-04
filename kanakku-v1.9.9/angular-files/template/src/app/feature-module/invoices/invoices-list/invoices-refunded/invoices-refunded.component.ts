import { Component } from '@angular/core';
import { Sort } from '@angular/material/sort';
import { MatTableDataSource } from '@angular/material/table';
import { routes } from 'src/app/core/helpers/routes/routes';
import { InvoicesDraft, apiResultFormat, pageSelection } from 'src/app/core/models/models';
import { DataService } from 'src/app/core/services/data/data.service';

@Component({
  selector: 'app-invoices-refunded',
  templateUrl: './invoices-refunded.component.html',
  styleUrls: ['./invoices-refunded.component.scss']
})
export class InvoicesRefundedComponent {
  public invoice: Array<InvoicesDraft> = [];
  public routes = routes
  isCollapsed = false;
  public Toggledata  = false;
  dataSource!: MatTableDataSource<InvoicesDraft>;
  public searchDataValue = '';
  // pagination variables
  public lastIndex = 0;
  public pageSize = 10;
  public totalData = 0;
  public skip = 0;
  public limit: number = this.pageSize;
  public pageIndex = 0;
  public serialNumberArray: Array<number> = [];
  public currentPage = 1;
  public pageNumberArray: Array<number> = [];
  public pageSelection: Array<pageSelection> = [];
  public totalPages = 0;
  //** / pagination variables
  

  constructor(private data: DataService) {}

  ngOnInit(): void {
    this.getTableData();
  }
  private getTableData(): void {
    this.invoice = [];
    this.serialNumberArray = [];

    this.data.getinvoicedraft().subscribe((data: apiResultFormat) => {
      this.totalData = data.totalData;
      data.data.map((res: InvoicesDraft, index: number) => {
        const serialNumber = index + 1;
        if (index >= this.skip && serialNumber <= this.limit) {
          res.invoiceId = serialNumber;
          this.invoice.push(res);
          this.serialNumberArray.push(serialNumber);
        }
      });
      this.dataSource = new MatTableDataSource<InvoicesDraft>(this.invoice);
      this.calculateTotalPages(this.totalData, this.pageSize);
    });
  }
 
  
  
  public sortData(sort: Sort) {
    const data = this.invoice.slice();

    if (!sort.active || sort.direction === '') {
      this.invoice = data;
    } else {
      this.invoice = data.sort((a, b) => {
        // eslint-disable-next-line @typescript-eslint/no-explicit-any
        const aValue = (a as any)[sort.active];
        // eslint-disable-next-line @typescript-eslint/no-explicit-any
        const bValue = (b as any)[sort.active];
        return (aValue < bValue ? -1 : 1) * (sort.direction === 'asc' ? 1 : -1);
      });
    }
  }
  public getMoreData(event: string): void {
    if (event == 'next') {
      this.currentPage++;
      this.pageIndex = this.currentPage - 1;
      this.limit += this.pageSize;
      this.skip = this.pageSize * this.pageIndex;
      this.getTableData();
    } else if (event == 'previous') {
      this.currentPage--;
      this.pageIndex = this.currentPage - 1;
      this.limit -= this.pageSize;
      this.skip = this.pageSize * this.pageIndex;
      this.getTableData();
    }
  }
  public moveToPage(pageNumber: number): void {
    this.currentPage = pageNumber;
    this.skip = this.pageSelection[pageNumber - 1].skip;
    this.limit = this.pageSelection[pageNumber - 1].limit;
    if (pageNumber > this.currentPage) {
      this.pageIndex = pageNumber - 1;
    } else if (pageNumber < this.currentPage) {
      this.pageIndex = pageNumber + 1;
    }
    this.getTableData();
  }
  public PageSize(): void {
    this.pageSelection = [];
    this.limit = this.pageSize;
    this.skip = 0;
    this.currentPage = 1;
    this.getTableData();
  }
  private calculateTotalPages(totalData: number, pageSize: number): void {
    this.pageNumberArray = [];
    this.totalPages = totalData / pageSize;
    if (this.totalPages % 1 != 0) {
      this.totalPages = Math.trunc(this.totalPages + 1);
    }
    for (let i = 1; i <= this.totalPages; i++) {
      const limit = pageSize * i;
      const skip = limit - pageSize;
      this.pageNumberArray.push(i);
      this.pageSelection.push({ skip: skip, limit: limit });
    }
  }
  open() {
    this.Toggledata = !this.Toggledata;
   
  }
  users = [
    { name: 'Barbara Moore', checked: false },
    { name: 'Hendry Evan', checked: false },
    { name: 'Richard Miles', checked: false }
  ];
  
  toggleCollapse() {
    this.isCollapsed = !this.isCollapsed;
  }
}
