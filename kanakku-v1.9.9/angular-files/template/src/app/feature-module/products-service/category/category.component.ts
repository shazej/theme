import { Component, OnInit } from '@angular/core';
import { Sort } from '@angular/material/sort';
import { MatTableDataSource } from '@angular/material/table';
import { DataService, routes } from 'src/app/core/core.index';
import { apiResultFormat, category, pageSelection } from 'src/app/core/models/models';


@Component({
  selector: 'app-category',
  templateUrl: './category.component.html',
  styleUrls: ['./category.component.scss']
})
export class CategoryComponent implements OnInit {
  public routes = routes;
  public category: Array<category> = [];
  isCollapsed = false;
  parent = 'none';
  parent2 = 'none';
 
  public Toggledata  = false;
  dataSource!: MatTableDataSource<category>;
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
    this.category = [];
    this.serialNumberArray = [];

    this.data.getCategory().subscribe((data: apiResultFormat) => {
      this.totalData = data.totalData;
      data.data.map((res: category, index: number) => {
        const serialNumber = index + 1;
        if (index >= this.skip && serialNumber <= this.limit) {
          res.id = serialNumber;
          this.category.push(res);
          this.serialNumberArray.push(serialNumber);
        }
      });
      this.dataSource = new MatTableDataSource<category>(this.category);
      this.calculateTotalPages(this.totalData, this.pageSize);
    });
  }
  public sortData(sort: Sort) {
    const data = this.category.slice();
    if (!sort.active || sort.direction === '') {
      this.category = data;
    } else {
      this.category = data.sort((a, b) => {
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
  user = [
    { name: 'Stationary', checked: false },
    { name: 'Medical', checked: false },
    { name: 'Designing', checked: false }
  ];
  useres = [
    { name: 'P125393', checked: false },
    { name: 'P125394', checked: false },
    { name: 'P125395', checked: false }
  ];
  files: File[] = [];
  onSelect(event: { addedFiles: File[] }) {
    this.files.push(...event.addedFiles);
  }
  onRemove(event:File) {
   this.files.splice(this.files.indexOf(event), 1);
  }

}
